<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class APIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents =[

                'site_title'=>setting('website_title', 'SIPL Training, Lucknow'),
                'site_kw'=>setting('website_kw', 'SIPL Training Lucknow'),
                'site_desc'=>setting('website_desc', 'SIPL Training Lucknow'),
                'site_logo'=>setting('company_logo', asset('img/logo.png')),
                'footer_note'=>setting('footer_note', 'SIPL TRAINING ONLINE'),
                "contact"=>[
                    'mobile'=>setting('company_phone', '9839990909'),
                    'whatsApp'=>setting('whatsapp', '9839990909'),
                    'email'=>setting('company_email', 'contact@sipltraining.com'),
                    'address'=>setting('company_address','Sipl Lucknow'),
                    'city'=> setting('city','Lucknow'),
                    'state'=>setting('state', 'UP'),
                    'country'=>setting('country', 'Bharat')
                ],
                "socal"=>[
                    "facebook"=>setting('facebook','https://www.facebook.com'),
                    "twitter"=>setting('twitter','https://www.twitter.com'),
                    "instagram"=>setting('instagram','https://www.instagram.com'),
                    "linkedin"=>setting('linkedin','https://www.linkedin.com'),
                    "youtube"=>setting('youtube','https://www.youtube.com'),
                ],

        ];
        return response($contents, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
