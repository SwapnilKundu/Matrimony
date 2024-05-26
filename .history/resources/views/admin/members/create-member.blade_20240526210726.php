@extends('main')
@section('custom-style')
    <style>
        @media screen and (max-width:480px){
            .footer{
                height: 550px;
            }
            .content{
                padding-top: 220px;
            }
            .col-md-6{
                margin: 5px 0;
            }
        }
    </style>
@endsection
@section('content')
    <div class="container" style="padding-top: 80px; margin-bottom: 20px;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Add Groom or Bride</h2>
                    </div>
                    <div class="card-body">
                        <form  method="POST" action="{{route('store.member')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-2">
                                <div class="col-md-6 d-flex">
                                    <lable class="col-md-4">Name :</lable>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control" value="{{old('name')}}">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex">
                                    <lable class="col-md-4">Gender :</lable>
                                    <div class="col-md-8">
                                        <select  name="gender"  class="form-control">
                                            <option value="">Select</option>
                                            <option value="male" {{old('gender')=='male'?'selected':''}}>Male</option>
                                            <option value="female" {{old('gender')=='female'?'selected':''}}>Female</option>
                                        </select>
                                        @if ($errors->has('gender'))
                                            <span class="text-danger">{{ $errors->first('gender') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row  mt-2">
                                <div class="col-md-6 d-flex">
                                    <lable class="col-md-4">Age :</lable>
                                    <div class="col-md-8">
                                        <input type="number" name="age" class="form-control" value="{{old('age')}}">
                                        @if ($errors->has('age'))
                                            <span class="text-danger">{{ $errors->first('age') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex">
                                    <lable class="col-md-4">Material Status :</lable>
                                    <div class="col-md-8">
                                        <select name="material_status" class="form-control">
                                            <option value="">Select</option>
                                            <option value="unmarried" {{old('material_status')=='unmarried'?'selected':''}}>Unmarried</option>
                                            <option value="divorced" {{old('material_status')=='divorced'?'selected':''}}>Divorced</option>
                                            <option value="widowed" {{old('material_status')=='widowed'?'selected':''}}>Widowed</option>
                                        </select>
                                        @if ($errors->has('material_status'))
                                            <span class="text-danger">{{ $errors->first('material_status') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row  mt-2">
                                <div class="col-md-6 d-flex">
                                    <lable class="col-md-4">Religion :</lable>
                                    <div class="col-md-8">
                                        <select name="religion" class="form-control">
                                            <option value="">Select</option>
                                            <option value="muslim" {{old('religion')=='muslim'?'selected':''}}>Muslim</option>
                                            <option value="hindu"  {{old('religion')=='hindu'?'selected':''}} >Hindu</option>
                                            <option value="christian"  {{old('religion')=='christian'?'selected':''}} >Christian</option>
                                            <option value="sikh"  {{old('religion')=='sikh'?'selected':''}} >Sikh</option>
                                            <option value="parsi"  {{old('religion')=='parsi'?'selected':''}} >Parsi</option>
                                            <option value="jewish"  {{old('religion')=='jewish'?'selected':''}} >Jewish</option>
                                            <option value="buddhist"  {{old('religion')=='buddhist'?'selected':''}} >Buddhist</option>
                                            <option value="spiritual"  {{old('religion')=='spiritual'?'selected':''}} >Spiritual</option>
                                            <option value="other"  {{old('religion')=='other'?'selected':''}} >Other</option>
                                        </select>
                                        @if ($errors->has('religion'))
                                            <span class="text-danger">{{ $errors->first('religion') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex">
                                    <lable class="col-md-4">Nationality :</lable>
                                    <div class="col-md-8">
                                        <select name="nationality" class="form-control">
                                            <option value="">Select</option>
                                            <option value="bangladeshi" {{old('nationality')=='bangladeshi'?'selected':''}}>Bangladeshi</option>
                                            <option value="indian" {{old('nationality')=='indian'?'selected':''}}>Indian</option>
                                            <option value="pakistani" {{old('nationality')=='pakistani'?'selected':''}}>Pakistani</option>
                                        </select>
                                        @if ($errors->has('nationality'))
                                            <span class="text-danger">{{ $errors->first('nationality') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row  mt-2">
                                <div class="col-md-6 d-flex">
                                    <lable class="col-md-4">City :</lable>
                                    <div class="col-md-8">
                                        <input type="text" name="city" class="form-control" value="{{old('city')}}">
                                        @if ($errors->has('city'))
                                            <span class="text-danger">{{ $errors->first('city') }}</span>
                                       
