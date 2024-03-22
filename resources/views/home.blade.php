@extends('layouts.main')

@section('container')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap')
        html{
            width: 100vw;
            height: 100vh;
            font-family: "Inter", sans-serif;
        }

        body{
            overflow: hidden;
        }

        .aux, .aux1{
            width: 40px;
            height: 600px;
            background-color: #E7F9FD;
            position: absolute;
            border-radius: 40px;
        }

        main{
            margin: auto;
            width: 90vw;
            height: 84vh;
            border-radius: 40px;
            background-color: #E7FAFE;
            display: flex;
        }

        .fx{
            width: 50%;
            height: 100%;
            font-family: "Inter", sans-serif;
        }

        .sus{
            padding: 15px 20px;
            background-color: white;
            font-weight: bold; 
            display: inline-block;
            border-radius: 30px;
            margin: 50px;
        }

        .fx h1{
            font-family: "Inter", sans-serif;
            margin-left: 50px;
            font-size: 4rem;
            font-weight: 600;
        }

        .fx p{
            margin-left: 50px;
            margin-top: 15px;
        }
    </style>
    <main>
        <div class="fx">
            <div class="sus">📜Recete actuale</div>
            <h1>Rapid și gustos<br> doar aici</h1>
            <p>Lorem ipsum dolor sit amet, consectetuipisicing elit, sed do eiusmod<br> tempor incididunt ut labore et dolore magna aliqut enim ad minim </p>
            <div style="display: flex; margin-left: 50px; gap: 35px;">
                <div style="background-color: #DBEDF1; display: inline-block; padding: 8px 16px; border-radius: 30px; font-family: 'Inter', sans-serif; font-weight: 600; color: #585F60">
                    30 minute</div>
                <div style="background-color: #DBEDF1; display: inline-block; padding: 8px 16px; border-radius: 30px; font-family: 'Inter', sans-serif; font-weight: 600; color: #585F60">Elemente</div>
            </div>
            <div style="display: flex; align-items: center; margin-left: 50px; margin-top: 150px; font-family: 'Inter', sans-serif;">
                <img style="width: 50px; height: 50px; border-radius: 50%;" src="https://i.pinimg.com/564x/71/16/20/71162016069e7f561d6f519cfe4ee937.jpg" alt="eu">
                <div>
                    <p style="font-weight: bold">Prodius Cătălin</p>
                    <p>21 martie 2024</p>
                </div>
            </div>
        </div>
        <div class="fx">
            <img style="width: 100%; height: 100%; object-fit:cover; border-radius: 0 40px 40px 0;" src="https://i.pinimg.com/564x/f9/f3/31/f9f331bdab534e6b7f88a3406ceade09.jpg" alt="test">
        </div>
    </main>
@endsection