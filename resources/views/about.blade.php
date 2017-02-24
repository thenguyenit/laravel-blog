@extends('layouts.master')

@section('meta')
    <title>Contact to {{trans('app.name')}}</title>
    <meta name="description" content="Contact to {{trans('app.name')}}" />
    <meta property="og:title" content="Contact to {{trans('app.name')}}"/>
@endsection

@section('content')
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Contact
                    <strong>to me</strong>
                </h2>
                <hr>
            </div>
            <div class="col-md-8">

            </div>
            <div class="col-md-4">
                <p>Phone:
                    <strong>{{trans('app.contact-phone-number')}}</strong>
                </p>
                <p>Email:
                    <strong><a href="mailto:{{trans('app.contact.email')}}">{{trans('app.contact-email')}}</a></strong>
                </p>
                <p>Address:
                    <strong>{{trans('app.contact-address')}}</strong>
                </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection
