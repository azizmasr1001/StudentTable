@extends('layouts.app')

@section('content')
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        ::-webkit-scrollbar {
            width: 5px;
        }

        ::-webkit-scrollbar-track {
            background: #13254c;
        }

        ::-webkit-scrollbar-thumb {
            background: #061128;
        }
    </style>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Chatbot</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Chatbot</li>
                        </ol>
                    </div>
                </div>
            </div>


            <div class="card" style="background: #fcfcfc; height: calc(90vh - 130px); overflow-y: hidden;">
                <div class="card-body">
                    <div class="container-fluid m-0 d-flex p-2">
                        <div class="pl-2" style="width: 40px;height: 50px; font-size: 180%;">
                            <i class="fa fa-angle-double-left text-black mt-2"></i>
                        </div>
                        <div style="width: 50px; height: 50px;">
                            <img src="dist/img/bot1.jpg" width="100%" height="100%" style="border-radius: 50px;">
                        </div>
                        <div class="text-black font-weight-bold ml-2 mt-2">
                            Chatbot
                        </div>
                    </div>
                    <div style="background: #061128;height: 2px;"></div>
                    <div id="content-box" class="container-fluid p-2"style="height: calc(75vh - 130px); overflow-y: scroll;">
                    </div>
                    <div class="container-fluid w-100 px-3 py-2 d-flex" style="background: #020202; height: 62px; border-radius: 10px;">
                        @csrf
                        <div class="text-white mr-2 pl-2"
                            style="background: #898e8f;width: calc(100% - 45px);border-radius: 5px;">
                            <input id="input" class="text-white" type="text" name="input"
                                style="background: none;width: 100%; height: 100%; border: 0;outline: none;">
                        </div>
                        <div id="button-submit" class="text-center"
                            style="background: #4acfee;height: 100%;width: 50px;border-radius:5px;">
                            <i class="fa fa-paper-plane text-white" aria-hidden="true" style="line-height:45px;"></i>
                        </div>
                    </div>
                </div>
            </div>





        </section>
    </div>
@endsection
