<?php

namespace App\Http\Controllers\Backend\Traits;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

trait Crud
{
    public function index()
    {
        $data = $this->c::orderBy('sort', 'asc')->get();
        return view('backend.pages.' . $this->module . '.index', compact('data'))->withPage($this->module);
    }

    public function create()
    {
        return view('backend.pages.' . $this->module . '.create')->withPage($this->module);
    }

    public function edit($id)
    {
        $data = $this->c::findOrFail($id);
        return view('backend.pages.' . $this->module . '.edit', compact('data'))->withPage($this->module);
    }

    public function store(Request $request)
    {
        $data = $request->except('_token', '_method');
        foreach ($data as $key => $d) {
            if ($d instanceof UploadedFile) {
                $data[$key] = $this->uploadImage($d);
            }
        }
        $this->c->create($data);
        return redirect($this->module)->with('success_message', 'Successfull Added.');
    }
    public function update(Request $request, $id)
    {
        $olddata = $this->c->find($id);
        $data = $request->except('_token', '_method');

        foreach ($data as $key => $d) {
            if ($d instanceof UploadedFile) {
                $data[$key] = $this->uploadImage($d, $olddata->$key);
            }
        }
        $olddata->update($data);
        return redirect()->route($this->module . '.index')->with('flash_success', 'Updated Successfully');
    }
    public function destroy($id)
    {
        $data = $this->c->find($id);
        $oldfile = $data->image;
        $data->delete();
        $this->removeImage($oldfile);
        return redirect()->route($this->module . '.index')->with('flash_success', 'Deleted Successfully');
    }
    protected function uploadImage(UploadedFile $file, $oldfile = null)
    {
        $fileName = Str::slug(Carbon::now()->format('YmdHisu')) . '.' . $file->getClientOriginalExtension();
        $file->move($this->imgPath(), $fileName);
        if (!is_null($oldfile)) {
            $this->removeImage($oldfile);
        }
        return $fileName;
    }

    protected function removeImage($file)
    {
        if (!is_null($file)) {
            if (file_exists($this->imgPath() . '/' . $file)) {
                unlink($this->imgPath() . '/' . $file);
            }
        }
    }
    protected function imgPath()
    {
        return public_path('images/' . $this->module);
    }
}
