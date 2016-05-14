@extends('layouts.app')

{{--full width page--}}
@push('body-classes') site-menubar-keep site-menubar-hide @endpush

@push('styles')
<style>
    .main-wrapper {
        margin-top: 1em;
    }
</style>
@endpush

@section('content')

<div class="page animsition">

    @include('settings.aside')

    <div class="page-main">

        @include('common.init-ng-app',['app' => 'subjects'])
        <div class="page-header">
            <h1 class="page-title">Subjects</h1>
        </div>

        <div class="page-content">
            <p>This page lists the subjects that are taught in {{$schoolSetting->school_name}}.</p>

            <div class="row">
                <nvd-form model="form" on-success="loadSubjects()" action="/subject" class="col-sm-4">
                    <nvd-form-element field="title">
                        <div class="input-group">
                            <div class="form-control-wrap">
                                <input class="form-control" placeholder="Add a New Subject" ng-model="form.title">
                            </div>
                            <span class="input-group-btn">
                              <button class="btn btn-primary waves-effect waves-light" type="submit">
                                  <i class="fa fa-plus"></i> Add
                              </button>
                            </span>
                        </div>
                    </nvd-form-element>
                </nvd-form>
            </div>

            <div class="main-wrapper row" show-loader="loadingSubjects">
                <div class="col-sm-3" ng-repeat="subject in subjects">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <n-editable type="text" name="title" value="subject.title"
                                            url="/subject/@{{subject.id}}"></n-editable>
                            </h3>
                            <div class="panel-actions">
                                <delete-btn action="/subject/@{{subject.id}}" on-success="loadSubjects()">
                                    <i class="fa fa-times"></i>
                                </delete-btn>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endNgApp

        </div>
    </div>
</div>
@endsection