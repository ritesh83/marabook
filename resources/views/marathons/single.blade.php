@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel-body">
            <form class="form-horizontal">
                <div class="form-group">
                    <label class="col-xs-4 col-sm-3 control-label">Name</label>

                    <div class="col-xs-6 col-sm-6">
                        <label class="control-label">{{$marathon->name}}</label>
                    </div>
                </div>

                <!-- Marathon Location -->
                <div class="form-group">
                    <label class="col-xs-4 col-sm-3 control-label">Location</label>

                    <div class="col-xs-6 col-sm-6">
                        <label class="control-label">{{$marathon->location}}</label>
                    </div>
                </div>

                <!-- Marathon Finish Time -->
                <div class="form-group">
                    <label class="col-xs-4 col-sm-3 control-label">Finish Time</label>

                    <div class="col-xs-6 col-sm-6">
                        <label class="control-label">{{$marathon->finish_time}}</label>
                    </div>
                </div>

                <!-- Marathon Date -->
                <div class="form-group">
                    <label class="col-xs-4 col-sm-3 control-label">Date</label>

                    <div class="col-xs-6 col-sm-6">
                        <label class="control-label">{{$marathon->date}}</label>
                    </div>
                </div>

                <!-- Marathon Distance -->
                <div class="form-group">
                    <label class="col-xs-4 col-sm-3 control-label">Distance</label>

                    <div class="col-xs-6 col-sm-6">
                        <label class="control-label">{{$marathon->distance}}</label>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection