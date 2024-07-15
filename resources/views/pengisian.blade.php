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
$pertanyaan=App\Models\Pertanyaan::orderBy('id', 'asc')->get();
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

            @foreach ($pertanyaan as $item)

            <div class="col-md-6">
                <div class="container">
                    <form class="form-group">

                        {{-- <h2>Checkboxes</h2>
                        <div class="inputGroup">
                            <input id="option1" name="option1" type="checkbox" />
                            <label for="option1">Option One</label>
                        </div>

                        <div class="inputGroup">
                            <input id="option2" name="option2" type="checkbox" />
                            <label for="option2">Option Two</label>
                        </div> --}}

                        <h2>{{$item->pertanyaan}}</h2>
                        <div class="inputGroup">
                            <input id="radio1" name="radio" type="radio" />
                            <label for="radio1">Iya</label>
                        </div>
                        <div class="inputGroup">
                            <input id="radio2" name="radio" type="radio" />
                            <label for="radio2">Tidak</label>
                        </div>
                    </form>

                    {{-- <div style="max-width: 600px; margin: 24px auto;">

                        <p>The trick to this is placing the label after the checkbox. That way you can use the
                            <code>:checked</code> state to toggle the different pseudo elements on the label. No
                            javascript
                            necessary.
                        </p>
                        <p>To make the background animation work, you'll need a tiny bit of magic. The
                            <code>label:before</code> element is a small 10x10 circle. We animate the scale of it
                            instead of
                            the size so that we can keep the proportion of the circle and make it look like it "fills
                            out"
                            the bar.
                        </p>
                        <p>The max width of the form is set to 550px. The <code>:before</code> element animates by using
                            scale3d (for hardware acceleration) by 56 times. 56 * 10 === 560. This allows the circle to
                            fill
                            out the bar by going slightly outside the bounds of the input group container.</p>

                        <p>Caveat: as you shrink the form, if you don't adjust the scale value, the animation will look
                            faster and less clean. As you design for smaller devices, add a few break points to adjust
                            the
                            scale amount to your liking.</p>
                    </div> --}}
                </div>
                <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
