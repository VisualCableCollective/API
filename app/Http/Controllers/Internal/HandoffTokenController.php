<?php

namespace App\Http\Controllers\Internal;

use App\Enums\Service;
use App\Enums\Tool;
use App\Http\Controllers\Controller;
use App\Models\HandoffToken;
use Illuminate\Http\Request;

class HandoffTokenController extends Controller
{
    public function index() {
        $service_tools = [];

        $service_tools[] = (object)['service_name' => 'VTCManager', 'tool_name' => 'Horizon', 'service_id' => 'vtcmanager', 'tool_id' => 'horizon'];

        return view('internal.handoff_token.index', ['service_tools' => $service_tools]);
    }

    public function create(Service $service, Tool $tool, Request $request) {
        $ip = $request->getClientIp();
        if ($ip == null) {
            return abort(400, "Sorry, but we couldn't detect your ip address, which is required for this request.");
        }

        $handoff_token = new HandoffToken();
        $handoff_token->user_ip = $ip;
        $handoff_token->tool = $tool;
        $handoff_token->service = $service;

        $request->user()->handoff_tokens()->save($handoff_token);

        $redirect_url = "";

        switch ($handoff_token->service) {
            case Service::VTCManager:
                switch ($handoff_token->tool) {
                    case Tool::Horizon:
                        $redirect_url = "https://api.vtcmanager.eu/horizon";
                        break;

                    case Tool::Telescope:
                        $redirect_url = "https://api.vtcmanager.eu/telescope";
                        break;
                }
                break;
        }

        return redirect($redirect_url . "?token=" . urlencode($handoff_token->id));
    }
}
