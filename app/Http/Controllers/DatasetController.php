<?php

namespace App\Http\Controllers;

use App\Models\Dataset;
use App\Models\DatasetRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use League\Csv\Reader;
use League\Csv\Statement;
use Illuminate\Support\Str;

class DatasetController extends Controller
{
    public function index()
    {
        $datasets = Dataset::latest()->paginate(12);
        return view('datasets.index', compact('datasets'));
    }

    public function create()
    {
        return view('datasets.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'csv_file' => 'required|file|mimes:csv,txt',
        ]);

        $file = $request->file('csv_file');


        $path = $file->store('uploads/datasets', 'public');

        $dataset = Dataset::create([
            'title' => $data['title'],
            'slug' => Str::slug($data['title']) . '-' . time(),
            'category' => $data['category'] ?? null,
            'description' => $data['description'] ?? null,
            'file_path' => $path,
        ]);

        $fullPath = Storage::disk('public')->path($path);
        $csv = Reader::createFromPath($fullPath, 'r');
        $csv->setHeaderOffset(0);

        $stmt = Statement::create();
        $records = $stmt->process($csv);

        $count = 0;
        foreach ($records as $record) {
            DatasetRecord::create([
                'dataset_id' => $dataset->id,
                'data' => $record,
            ]);
            $count++;
        }

        $dataset->update(['rows_count' => $count]);

        return redirect()->route('datasets.index')->with('success', 'Dataset uploaded and parsed.');
    }

    public function show(Dataset $dataset)
    {
        $records = $dataset->records()->paginate(25);
        return view('datasets.show', compact('dataset', 'records'));
    }

    public function download(Dataset $dataset)
    {
        $fullPath = Storage::disk('public')->path($dataset->file_path);
        if (!file_exists($fullPath)) {
            abort(404);
        }
        return response()->download($fullPath);
    }

    public function apiIndex()
    {
        return response()->json(Dataset::withCount('records')->get());
    }

    public function apiShow(Dataset $dataset)
    {
        $records = $dataset->records()->limit(100)->get()->map(fn ($r) => $r->data);
        return response()->json([
            'dataset' => $dataset,
            'records' => $records,
        ]);
    }
}
