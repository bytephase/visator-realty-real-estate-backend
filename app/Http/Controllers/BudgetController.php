<?php

namespace App\Http\Controllers;

use App\Http\Requests\BudgetRequest;
use App\Models\Budget;

class BudgetController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Budget::class);

        return Budget::all();
    }

    public function store(BudgetRequest $request)
    {
        $this->authorize('create', Budget::class);

        return Budget::create($request->validated());
    }

    public function show(Budget $budget)
    {
        $this->authorize('view', $budget);

        return $budget;
    }

    public function update(BudgetRequest $request, Budget $budget)
    {
        $this->authorize('update', $budget);

        $budget->update($request->validated());

        return $budget;
    }

    public function destroy(Budget $budget)
    {
        $this->authorize('delete', $budget);

        $budget->delete();

        return response()->json();
    }
}
