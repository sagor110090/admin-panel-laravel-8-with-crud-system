<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Session;
use Storage;
use JoeDixon\Translation\Drivers\Translation;
use JoeDixon\Translation\Http\Requests\LanguageRequest;

class SiteSettingController extends Controller
{

    private $translation;

    public function __construct(Translation $translation)
    {
        $this->translation = $translation;
    }

    public function edit($id)
    {
        $sitesetting = SiteSetting::findOrFail($id);
        $languages = $this->translation->allLanguages();
        return view('admin.site-setting.edit', compact('sitesetting','languages'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'address' => 'required',
            'website_name' => 'required',
            'language' => 'required',

		]);
        $requestData = $request->all();
        if ($request->hasFile('logo')) {
            $requestData['logo'] = $request->file('logo')
                ->store('uploads', 'public');
            if($request->oldlogo){
                Storage::delete($request->oldlogo);
            }
        }
        if ($request->hasFile('favicon')) {
            $requestData['favicon'] = $request->file('favicon')
                ->store('uploads', 'public');
            if($request->oldfavicon){
                Storage::delete($request->oldfavicon);
            }
        }

        $sitesetting = SiteSetting::findOrFail($id);
        $sitesetting->update($requestData);
        \Artisan::call('config:cache');
        Session::flash('success','Successfully Updated!');

        return back();
    }
}
