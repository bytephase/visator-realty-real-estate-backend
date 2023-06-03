<?php

namespace App\Http\Controllers\Lead;

use App\Http\Controllers\Controller;
use App\Http\Requests\LeadRequest;
use App\Models\Lead;

class LeadController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Lead::class);

        return Lead::all();
    }

    public function store(LeadRequest $request)
    {
        $this->authorize('create', Lead::class);

        return Lead::create($request->validated());
    }

    public function show(Lead $lead)
    {
        $this->authorize('view', $lead);

        return $lead;
    }

    public function update(LeadRequest $request, Lead $lead)
    {
        $this->authorize('update', $lead);

        $lead->update($request->validated());

        return $lead;
    }

    public function destroy(Lead $lead)
    {
        $this->authorize('delete', $lead);

        $lead->delete();

        return response()->json();
    }
}
