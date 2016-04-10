<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Marathon;
use App\Repositories\MarathonRepository;

class MarathonController extends Controller
{
    /**
     * The marathon repository instance.
     *
     * @var MarathonRepository
     */
    protected $marathons;

    /**
     * Create a new controller instance.
     *
     * @param  MarathonRepository  $marathons
     * @return void
     */
    public function __construct(MarathonRepository $marathons)
    {
        $this->middleware('auth');

        $this->marathons = $marathons;
    }

    /**
     * Display a list of all of the user's marathons.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        return view('marathons.index', [
            'marathons' => $this->marathons->forUser($request->user()),
        ]);
    }

    public function get($id)
    {
        return view('marathons.single', [
            'marathon' => $this->marathons->byId($id)
        ]);
    }

    /**
     * Create a new marathon.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'location' => 'required|max:255',
            'date' => 'required|max:255',
        ]);

        $request->user()->marathons()->create([
            'name' => $request->name,
            'location' => $request->location,
            'finish_time' => $request->finish_time,
            'date' => $request->date,
            'distance' => $request->distance
        ]);

        return redirect('/marathons');
    }

    /**
     * Destroy the given marathon.
     *
     * @param  Request  $request
     * @param  Marathon  $marathon
     * @return Response
     */
    public function destroy(Request $request, Marathon $marathon)
    {
        //$this->authorize('destroy', $marathon);

        $marathon->delete();

        return redirect('/marathons');
    }
}
