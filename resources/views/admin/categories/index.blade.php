@extends('layouts.admin')

@section('title', 'Dashboard Admin Category')

@section('content')
    <style>
        .container {
            container-type: inline-size;
            container-name: main-container;
            background-color: #fff;
            padding: 30px 40px;
            border-radius: 10px;
            width: 100%;
            height: 100%;
            max-height: 891px;
        }

        .top-card {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .top-card h2 {
            display: inline-block;
            margin-bottom: 6px;
            color: #FF9B51;
            font-size: 46px;
        }

        .top-card a {
            color: #fff;
            margin-bottom: 6px;
            font-size: 24px;
            font-weight: 800;
            display: inline-block;
        }

        .table-wrapper {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            margin-top: 20px;
            border-radius: 10px;
        }

        table {
            width: 100%;
            min-width: 600px;
            background-color: #9A9A9A;
            color: #fff;
            border-collapse: collapse;
            border-radius: 10px;
        }

        table th,
        table td {
            padding: 12px 20px;
            text-align: center;
            border: 1px solid #ddd;
        }

        table th {
            font-size: 24px;
            font-weight: bold;
        }

        @container main-container (max-width : 750px) {
            .top-card {
                flex-direction: column;
            }

            .top-card h2 {
                font-size: 32px;
                text-align: center;
            }
        }
    </style>
    <div class="main-page-admin">
        <div class="container">
            <div class="top-card">
                <h2 class="page-title">List
                    Categories
                </h2>
            </div>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Category ID</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < 10; $i++)
                            <tr>
                                <td>database</td>
                                <td>database</td>
                                <td>
                                    <a href="" class="edit"><img src="{{ asset('edit_icon.svg') }}" alt="Icon Edit"
                                            style="width: 30px; height: 30px; "></a>
                                    <a href="" class="hapus"><img src="{{ asset('trash_icon.svg') }}" alt="Icon Trash"
                                            style="width: 30px; height: 30px; "></a>
                                </td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>

        </div>
@endsection