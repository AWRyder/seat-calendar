<?php

namespace Seat\Kassie\Calendar\Http\Controllers;

use Illuminate\Http\Request;

use Seat\Web\Http\Controllers\Controller;
use Seat\Kassie\Calendar\Helpers\Settings;
use Seat\Kassie\Calendar\Models\Setting;
use Seat\Kassie\Calendar\Models\Tag;

class SettingController extends Controller
{
	public function index() {
		$settings = Setting::all()->first();
		$tags = Tag::all();

		return view('calendar::setting.index', [
			'settings' => $settings,
			'tags' => $tags
		]);
	}

	public function updateSlack(Request $request) 
	{		
		$settings = Setting::all()->first();

		$settings->slack_integration = $request->slack_integration == 1 ? 1 : 0;
        $settings->slack_webhook = $request->slack_webhook;
        $settings->slack_webhook_public = $request->slack_webhook_public;
		$settings->slack_emoji_importance_full = $request->slack_emoji_importance_full;
		$settings->slack_emoji_importance_half = $request->slack_emoji_importance_half;
		$settings->slack_emoji_importance_empty = $request->slack_emoji_importance_empty;

		$settings->save();

		return redirect()->back();
	}
}