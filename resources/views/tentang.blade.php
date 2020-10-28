@extends('layout/main')

@section('title', 'Tentang')

@section('container')
<style>
@font-face{
    font-family: bold;
    src: url("font/Poppins-Bold.TTF")
}
@font-face{
    font-family: light;
    src: url("font/Poppins-Light.TTF")
}
@font-face{
    font-family: black;
    src: url("font/Poppins-Black.TTF")
}
@font-face{
    font-family: semiBold;
    src: url("font/Poppins-SemiBold.TTF")
}
h1{
    font-family: bold;
}
.about2{
    position: relative;
    top: 90px;
}
.about2-text1{
    font-family: black;
    font-size: 40px;
}
.about2-text2{
    font-family: semiBold;
}
.about2-text3{
    font-family: light;
}
.about3{
    position: relative;
    top: 70px;
}
.about3-text1{
    font-family: black;
    font-size: 40px;
}
.about3-text2{
    font-family: semiBold;
}
.about3-text3{
    font-family: light;
}
</style>
    <div class="container">
        <div class="row">
            <div class="col-10 mt-5 ml-4">
                <h1 class="text-white">Tentang Kami</h1>
            </div>
        </div>
    </div>
@endsection

@section('about2')
<section id="about2" class="about2 pb-5">
    <div class="about2">
        <div class="row justify-content-center mb-2">
            <div class="col-md-5 pb-5">
                <h1 class="about2-text1">Tropisianimal</h1>
                <p class="about2-text2 mr-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, adipisci asperiores? Id velit recusandae dolores maxime incidunt doloribus laudantium odio quae. Perspiciatis exercitationem, facilis velit minima itaque assumenda maxime et.</p>
                <p class="about2-text3 mr-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium aliquam ratione sed. A assumenda officia dolorem maxime doloremque? Soluta aspernatur excepturi cum voluptates nulla totam dolorum magnam earum tempore sit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, expedita enim? Voluptatum quaerat exercitationem corrupti aperiam veritatis. Nemo, ut possimus! Accusamus minus odit explicabo architecto, harum ut ex dicta placeat!</p>
            </div>
            <div class="gambar-cont">
                <div class="row">
                    <div class="col">
                        <img src="/img/kyaw-tun.png" width="100%" class="about-gambar">
                    </div>
                    <div class="col">
                        <img src="/img/orangUtan.png" width="100%" class="about-gambar">
                    </div>
                </div>
                <div class="row pt-4">
                    <div class="col">
                        <img src="/img/harimau-2.png" width="100%" class="about-gambar">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('about3')
<section id="about3" class="about3 pb-5">
    <div class="about3">
        <div class="row justify-content-start ml-5 mb-5">
            <div class="col-10 mt-1 ml-5 pb-5">
                <h1 class="about3-text1">Visi</h1>
                <p class="about3-text2 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, adipisci asperiores? Id velit recusandae dolores maxime incidunt doloribus laudantium odio quae. Perspiciatis exercitationem, facilis velit minima itaque assumenda maxime et. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus error optio voluptatibus consequatur vel, rem tenetur consectetur exercitationem sunt, alias iusto odio placeat dicta fugiat. Earum quas facilis voluptatibus quos.</p>
            </div>
            <div class="col-10 ml-5 pb-5">
                <h1 class="about3-text1">Misi</h1>
                <p class="about3-text2 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, adipisci asperiores? Id velit recusandae dolores maxime incidunt doloribus laudantium odio quae. Perspiciatis exercitationem, facilis velit minima itaque assumenda maxime et. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus error optio voluptatibus consequatur vel, rem tenetur consectetur exercitationem sunt, alias iusto odio placeat dicta fugiat. Earum quas facilis voluptatibus quos.</p>
            </div>
        </div>
    </div>
</section>
@endsection