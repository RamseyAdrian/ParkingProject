@extends('firebase.parkapp')

@section('content')

<div class="landing-section">
    <div class="section">
        <div class="container">
            <div class="box">
                <div class="left-part">
                    {{-- <img src="{{ URL::asset('img/lot_bg.jpeg') }}" alt="" height="480px"> --}}
                </div>
                <div class="right-part">
                    <div class="rp-1">
                        <h1>Search & Compare</h1>
                    </div><br>
                    <div class="rp-2">
                        <h3>All Available Parking</h3>
                    </div><br>
                    <div class="rp-3">
                        <a href="login.php"> <button id="park-now-btn">Park Now !</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <div class="section">
        <div class="container">
            <div class="box-park">
                <div class="box-part-header">
                    <center>
                        <h1>Area Parkir</h1>
                    </center>
                </div>
                <br>
                <div class="lot">

                    @forelse($lot as $key => $item)
                    <?php 
                        if ($item['status'] == 0) {
                            ?>
                            <div class="spot" style="background-color:#12bd54; border-radius:10px ">
                                <a href="" style="text-decoration:none ">
                                    <div class="nameLot">
                                        <center>
                                            <h1 style="color: #fff"><?php echo $key ?></h1>
                                            <h4 style="color: #fff">Available</h4>
                                        </center>
                                    </div>
                                </a>
                            </div>
                            <?php
                        }else if ($item['status'] == 1) {
                            ?>
                            <div class="spot" style="background-color:red; border-radius:10px ">
                                <a href="" style="text-decoration:none ">
                                    <div class="nameLot">
                                        <center>
                                            <h1 style="color: #fff"><?php echo $key ?></h1>
                                            <h4 style="color: #fff">Not Available</h4>
                                        </center>
                                    </div>
                                </a>
                            </div>
                            <?php
                        }
                    ?>
                    @empty
                        <h4>No Parking Lot Found</h4>
                    @endforelse
                </div>
                <br>
                <div class="book-section">
                    <center>
                        <a href="login.php"><button id="book-btn">Book Now !</button></a>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection