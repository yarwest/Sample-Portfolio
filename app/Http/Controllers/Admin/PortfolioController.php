<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{
    public function index() {
        $portfolioItems = \App\PortfolioItem::get();
        return view('admin.portfolio')->with(compact('portfolioItems'));
    }

	public function store(Request $request) {
		$this->validate($request,
			['title' => 'required|string',
			'description'=>'required|max:2000|string']
		);

		$item = new \App\PortfolioItem();
		$item->title = $request->input('title');
		$item->description = $request->input('description');
		$item->save();
		//send to main page with message
		session()->flash('message', 'Successfully added new portfolio item');
   		session()->flash('alert-class', 'alert-success');

		return redirect()->back();
	}

	public function update(Request $request, $id) {
        $this->validate($request,
        	['title' => 'required|string',
        	'description'=>'required|max:2000|string']
        );

        $item =  \App\PortfolioItem::findOrFail($id);
        $item->title = $request->input('title');
        $item->description = $request->input('description');
        $item->save();
        //send to main page with message
        session()->flash('message', 'Successfully updated portfolio item');
        session()->flash('alert-class', 'alert-success');

        return redirect()->back();
	}

    public function destroy($id) {
		$item =  \App\PortfolioItem::findOrFail($id);
		$item->delete();

		session()->flash('message', "Successfully removed portfolio item.");
        session()->flash('alert-class', 'alert-success');

		return redirect()->back();
	}
}
