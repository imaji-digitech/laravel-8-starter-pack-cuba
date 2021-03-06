<div class="row second-chart-list third-news-update">
    <div class="col-xl-4 col-lg-12 xl-50 morning-sec box-col-12">
        <div class="card o-hidden profile-greeting" style="background-color: #000 !important;">
            <div class="card-body">
                <div class="media">
                    <div class="badge-groups w-100">
                        <div class="badge f-12"><i class="me-1" data-feather="clock"></i><span
                                id="txt"></span></div>
                        <div class="badge f-12"><i class="fa fa-spin fa-cog f-14"></i></div>
                    </div>
                </div>
                <div class="greeting-user text-center">
                    <div class="profile-vector"><img class="img-fluid rounded-full object-cover"
                                                     src="{{ auth()->user()->profile_photo_url }}"
                                                     style="width: 100px;height: 100px; border-radius: 100px"
                                                     alt=""></div>
                    <h4 class="f-w-600"><span id="greeting">Good Morning</span> <span
                            class="right-circle"><i class="fa fa-check-circle f-14 middle"></i></span></h4>
                    <p><span> Hai {{ auth()->user()->name }} bagaimana kabarmu ?</span></p>
                    {{--                                <div class="whatsnew-btn"><a class="btn btn-primary">Whats New !</a></div>--}}
                    <div class="left-icon"><i class="fa fa-bell"> </i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12 xl-50 calendar-sec box-col-6">
        <div class="card gradient-primary o-hidden">
            <div class="card-body">
                <div class="setting-dot">
                    <div class="setting-bg-primary date-picker-setting position-set pull-right"><i
                            class="fa fa-spin fa-cog"></i></div>
                </div>
                <div class="default-datepicker" style="margin: 0">
                    <div class="datepicker-here" data-language="en"></div>
                </div>
            </div>
        </div>
    </div>
</div>
