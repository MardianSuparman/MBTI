@extends('layouts.user')

@section('style')
    <style>
        .inputGroup {
            background-color: #fff;
            display: block;
            margin: 10px 0;
            position: relative;

            label {
                padding: 12px 30px;
                width: 100%;
                display: block;
                text-align: content;
                color: #3C454C;
                cursor: pointer;
                position: relative;
                z-index: 2;
                transition: color 200ms ease-in;
                overflow: hidden;

                &:before {
                    width: 10px;
                    height: 10px;
                    border-radius: 50%;
                    content: '';
                    background-color: #5562eb;
                    position: absolute;
                    left: 50%;
                    top: 50%;
                    transform: translate(-50%, -50%) scale3d(1, 1, 1);
                    transition: all 300ms cubic-bezier(0.4, 0.0, 0.2, 1);
                    opacity: 0;
                    z-index: -1;
                }

                &:after {
                    width: 32px;
                    height: 32px;
                    content: '';
                    border: 2px solid #D1D7DC;
                    background-color: #fff;
                    background-image: url("data:image/svg+xml,%3Csvg width='32' height='32' viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M5.414 11L4 12.414l5.414 5.414L20.828 6.414 19.414 5l-10 10z' fill='%23fff' fill-rule='nonzero'/%3E%3C/svg%3E ");
                    background-repeat: no-repeat;
                    background-position: 2px 3px;
                    border-radius: 50%;
                    z-index: 2;
                    position: absolute;
                    right: 30px;
                    top: 50%;
                    transform: translateY(-50%);
                    cursor: pointer;
                    transition: all 200ms ease-in;
                }
            }

            input:checked~label {
                color: #fff;

                &:before {
                    transform: translate(-50%, -50%) scale3d(56, 56, 1);
                    opacity: 1;
                }

                &:after {
                    background-color: #54E0C7;
                    border-color: #54E0C7;
                }
            }

            input {
                width: 32px;
                height: 32px;
                order: 1;
                z-index: 2;
                position: absolute;
                right: 30px;
                top: 50%;
                transform: translateY(-50%);
                cursor: pointer;
                visibility: hidden;
            }
        }


        // codepen formatting
        .form {
            padding: 0 16px;
            max-width: 550px;
            margin: 50px auto;
            font-size: 18px;
            font-weight: 600;
            line-height: 36px;
            text-align: center
        }

        body {
            background-color: #D1D7DC;
            font-family: 'Fira Sans', sans-serif;
        }

        *,
        *::before,
        *::after {
            box-sizing: inherit;
        }

        html {
            box-sizing: border-box;
        }

        code {
            background-color: #9AA3AC;
            padding: 0 8px;
        }
    </style>
@endsection
@php
    $pertanyaan = App\Models\Pertanyaan::orderBy('id', 'asc')->get();
@endphp
@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>personality Test</h2>
                        <span>isi pertanyaan dengan jujur dan apa adanya</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <form class="form-group">
                    @foreach ($pertanyaan as $data)
                        <b><p>{{ $loop->literation }}. {{ $data->pertanyaan }}</p></b>
                        @foreach ($data->jawaban as $jawaban)
                            <div class="col-md-6">
                                <div class="container">
                                    <h2>{{ $item->pertanyaan }}</h2>
                                    <div class="inputGroup">
                                        <input id="radio1" name="radio" type="radio" />
                                        <label for="radio1">Iya</label>
                                    </div>
                                    <div class="inputGroup">
                                        <input id="radio2" name="radio" type="radio" />
                                        <label for="radio2">Tidak</label>
                                    </div>
                                </div>
                                <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
                            </div>
                        @endforeach
                    @endforeach
                </form>
            </div>
        </div>
    </div>
@endsection
