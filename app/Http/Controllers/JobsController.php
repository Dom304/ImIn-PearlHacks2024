<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CatalogController extends APIController
{
    public function list(Request $request)
    {
        try {
      
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            Log::error($e->getTraceAsString());
            return $this->return_error($request, $e->getMessage(), false);
        }
    }


    public function view(Request $request, $catalog_id)
    {
        try {

        } catch (\Exception $e) {
            Log::error($e->getMessage());
            Log::error($e->getTraceAsString());
            return $this->return_error($request, $e->getMessage(), false);
        }
    }


    public function create(Request $request)
    {
        try {
       
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            Log::error($e->getTraceAsString());
            return $this->return_error($request, 'Failed to create a new catalog.', false, 500);
        }
    }

    public function edit($catalog_id)
    {

    }


    public function update(Request $request)
    {

        try {
      

        } catch (\Exception $e) {
            Log::error($e->getMessage());
            Log::error($e->getTraceAsString());
            return $this->return_error($request, 'Failed to update this catalog.', false, 500);
        }
    }

    public function delete(Request $request, $catalog_id)
    {
        try {
        

        } catch (\Exception $e) {
            Log::error($e->getMessage());
            Log::error($e->getTraceAsString());
            return $this->return_error($request, 'Failed to delete this Section.', false, 500);
        }
    }
}