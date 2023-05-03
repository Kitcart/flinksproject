@extends($active_theme)
@section('title')
    <title>{{__('user.Privacy Policy')}}</title>
@endsection
@section('meta')
    <meta name="description" content="{{__('user.Privacy Policy')}}">
@endsection

@section('frontend-content')
    <!--=========================
        BREADCRUMB START
    ==========================-->
    <div class="wsus__breadcrumb" style="background: url({{ asset($breadcrumb->image) }});">
        <div class="wsus__breadcrumb_overlay pt_90 xs_pt_60 pb_95 xs_pb_65">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <nav aria-label="breadcrumb">
                            <h1>{{__('user.Privacy Policy')}}</h1>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">{{__('user.Home')}}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{__('user.Privacy Policy')}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=========================
        BREADCRUMB END
    ==========================-->


        <!--=========================
        PRIVACY POLICY START
    ==========================-->
    <section class="wsus__pricacy_policy mt_95 xs_mt_65 mb_75 xs_mb_50">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="wsus__pricacy_policy_text">
                        @if ($privacyPolicy)
                            {!! clean($privacyPolicy) !!}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        PRIVACY POLICY END
    ==========================-->
@endsection
