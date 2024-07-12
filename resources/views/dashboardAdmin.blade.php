<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Outfit', sans-serif;
        }
    </style>
</head>

<body>
    {{-- Navbar --}}
    @extends('layout')

    @section('Content')

    <div class="min-h-screen py-10 w-full bg-[#F0F7F4]">
        <div class=" mx-auto w-5/6">
            <p class="text-xl font-bold mb-4">Approval Worker List</p>
            <div class="grid grid-cols-9 gap-4 border border-black p-2">

                <div class="font-bold text-center">Nama Tukang</div>
                <div class="font-bold text-center">Umur</div>
                <div class="font-bold text-center">Gender</div>
                <div class="font-bold text-center">Phone Number</div>
                <div class="font-bold text-center">Description</div>
                <div class="font-bold text-center">Location</div>
                <div class="font-bold text-center">CV/Portfolio</div>
                <div class="font-bold text-center">Photo</div>
                <div class="font-bold text-center">Action</div>
                @foreach ($ProposalTukangs as $proposal)
                    <div class="text-center">{{$proposal->Nama}}</div>
                    <div class="text-center">{{$proposal->Umur}}</div>
                    <div class="text-center">{{$proposal->Gender}}</div>
                    <div class="text-center">{{$proposal->NomorTelepon}}</div>
                    <div class="text-center">{{$proposal->Deskripsi}}</div>
                    <div class="text-center">{{$proposal->Alamat}}
                    </div>
                    <div class="text-center"><a href="{{$proposal->CV_path}}">Link Porto</a></div>
                    <div class="text-center"><a href="{{$proposal->Photo_path}}">Link Photo</a></div>
                    <div class="text-center flex">
                        <a href="{{route('admin.approve.proposaltukang', ['id' => $proposal->TukangID, 'action' => 'Accepted'])}}"><button  class="bg-green-500 h-10 px-1 rounded">Approve</button></a>
                        <a href="{{route('admin.approve.proposaltukang', ['id' => $proposal->TukangID, 'action' => 'Rejected'])}}"><button  class="bg-red-500 h-10 px-1 rounded">Reject</button></a>
                    </div>
                @endforeach
            </div>
        </div>
            <div class="my-8 mx-auto w-5/6">
                <p class="text-xl font-bold mb-4">Approval New Service Type</p>
                <div class="grid grid-cols-7 gap-4 border border-black p-2">

                    <div class="font-bold text-center">ID Tukang</div>
                    <div class="font-bold text-center">Service Type Name</div>
                    <div class="font-bold text-center">Deskripsi</div>
                    <div class="font-bold text-center">Status</div>
                    <div class="font-bold text-center">Proposed Date</div>
                    <div class="font-bold text-center">Approved Date</div>
                    <div class="font-bold text-center">Action</div>

                    @foreach ($ProposalServiceTypes as $ServiceType)
                        <div class="text-center">{{$ServiceType->TukangID}}</div>
                        <div class="text-center">{{$ServiceType->NamaService}}</div>
                        <div class="text-center">{{$ServiceType->Deskripsi}}</div>
                        <div class="text-center">{{$ServiceType->Status}}</div>
                        <div class="text-center">{{$ServiceType->ProposedDate}}</div>
                        @if ($ServiceType->ApprovedDate == null)
                            <div class="text-center">-</div>
                        @else
                            <div class="text-center">{{$ServiceType->ApprovedDate}}</div>
                        @endif
                        <div class="text-center flex">
                            <a href="{{route('admin.approve.proposalservicetype', ['id' => $ServiceType->ServiceTypeApprovalID, 'action' => 'Accepted'])}}"><button class="bg-green-500 h-10 px-1 rounded">Approve</button></a>
                            <a href="{{route('admin.approve.proposalservicetypa', ['id' => $ServiceType->ServiceTypeApprovalID, 'action' => 'Rejected'])}}"><button class="bg-red-500 h-10 px-1 rounded">Reject</button></a>
                        </div>
                    @endforeach

                </div>
            </div>
    </div>

    {{-- Footer --}}
    @endsection





</body>

</html>
