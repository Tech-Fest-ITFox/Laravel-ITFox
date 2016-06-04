@extends('layouts.master')

@section('title')
    {{ Auth::user()->name }} - Начало
@endsection

@section('content')
    <h1>{{ $role }} Dashboard</h1>
    <ul class="dashboard-user clearfix">
			<li class="profile clearfix">
				<h2>{{ Auth::user()->name }}</h2>
				<div class="avatar-holder bigger fleft">
					<img src="{{ asset('src/images/' . Auth::user()->image_path) }}" class="avatar" alt="">
				</div>
				@if ( Auth::user()->grade != 0 && Auth::user()->class != '' && Auth::user()->school != '' && Auth::user()->city != '' )
                    <p>
                        {{ Auth::user()->roles{0}->role }} от <a href="#">{{ Auth::user()->grade }} {{ Auth::user()->class }}</a> клас <br>
                        в <a href="#">{{ Auth::user()->school }}</a> <br>
                        град {{ Auth::user()->city }} <br>
                        e-mail: <a href="#">{{ Auth::user()->email }}</a> <br><br>
                        <!-- учител по ИТ: <a href="#">Спаска Ангелова</a> -->
                    </p>
				<a href="/edit-user" class="btn">Промени информацията</a>
                    @else
                    <p>
                        Имате незавършен профил. <br>
                        <a href="edit-user">Попълнете профила си.</a> <br>
                        e-mail: <a href="#">{{ Auth::user()->email }}</a> <br><br><br>
                        <!-- учител по ИТ: <a href="#">Спаска Ангелова</a> -->
                    </p>
                @endif
			</li>
			<li class="profile-info-files clearfix">
				<h2>Моите файлове</h2>
				@if ( count(Auth::user()->files) != 0 )
					<ul class="files-listing clearfix">
						@foreach (Auth::user()->files as $file)
							<li class="clearfix">
								<a href="#" class="clearfix">
									<div class="file-name">
									@if ( $file->type == 'html' || $file->type == 'cpp' )
										<i class="fa fa-file-code-o {{$file->type}}-color"></i> {{$file->name}}</div>
									@elseif ( $file->type == 'ps' || $file->type == 'coreldraw')
										<i class="fa fa-file-image-o {{$file->type}}-color"></i> {{$file->name}}</div>
									@elseif ( $file->type == 'archive')
										<i class="fa fa-file-archive-o orange-color"></i> {{$file->name}}</div>
									@elseif ( $file->type == 'word')
										<i class="fa fa-file-word-o word-color"></i> {{$file->name}}</div>
									@elseif ( $file->type == 'excel')
										<i class="fa fa-file-excel-o excel-color"></i> {{$file->name}}</div>
									@elseif ( $file->type == 'powerpoint')
										<i class="fa fa-file-powerpoint-o powerpoint-color"></i> {{$file->name}}</div>
									@endif
									<div class="file-size">{{$file->size}}</div>
									<div class="file-date">{{$file->created_at}}</div>
								</a>
							</li>
						@endforeach
					</ul>
					@else
					<p>
						Все още нямате качени файлове.
					</p>
				@endif
				<div class="btn-group">
					<a href="#" class="btn" data-dialog="new_file" onclick="return false">Качи нов файл</a>
					@if (count(Auth::user()->files) != 0)
						<a href="#" class="btn-company">Всички качени ({{count(Auth::user()->files)}}) }}</a>
					@endif
				</div>
			</li>
			<li class="groups">
				<h2>Групи</h2>
				<table style="width: 100%;">
					<tr>
						<td><a href="#">XI A</a></td>
						<td><a href="#" class="nostyle">Николай</a> и 14 други</td>
						<td><span class="legend">КЛАС</span></td>
					</tr>
					
				</table>
				<div class="btn-group">
					<a href="#" class="btn">Създай нова група</a>
					<a href="#" class="btn-company">Всички групи (7)</a>
				</div>
			</li>
		</ul>
		<section class="stream">
			<article class="droplet">
				<h5><a href="#">Спаска Ангелова</a> качи нов <span>урок</span> в раздел <a href="#" class="excel-color">Powerpoint Excel</a>.</h5>
				<div class="timeago">Преди 4 часа</div>
				<a href="#" class="droplet-title nostyle">
					<h3>
						Обработка на таблични данни в Microsoft Excel. Използване на формули за сортиране на данни.
					</h3>
				</a>
			</article>
			<article class="droplet">
				<h5><a href="#">Алекс Мишев</a> качи нов <span class="word-color">файл</span>.</h5>
				<div class="timeago">Преди 5 часа</div>
				<a href="#" class="droplet-title dfile clearfix nostyle" title="Прегледай">
					<div class="file-name"><i class="fa fa-file-word-o word-color"></i> Document1-kursova-rabota.docx</div>
					<div class="file-size">2.3MB</div>
					<div class="file-date">08.02.2016</div>
				</a>
				<a href="#">СВАЛИ ТОЗИ ФАЙЛ</a>
			</article>
			<article class="droplet">
				<h5><a href="#">Поп Андрей (XII A)</a> качи нов <span class="coreldraw-color">файл</span>.</h5>
				<div class="timeago">Преди 4 часа</div>
				<a href="#" class="droplet-title dfile clearfix nostyle" title="Прегледай">
					<div class="file-name"><i class="fa fa-file-image-o coreldraw-color"></i> domashna02-gazov_balon.svg</div>
					<div class="file-size">5MB</div>
					<div class="file-date">20.04.2016</div>
				</a>
				<a href="#">СВАЛИ ТОЗИ ФАЙЛ</a>
			</article>
			<article class="droplet">
				<h5>СИСТЕМНО СЪОБЩЕНИЕ</h5>
				<div class="timeago">Преди 19 часа</div>
				<p>
					На 20.04.2016г. от 10:00 до 16:00 сайтът няма да бъде достъпен заради обновления по сървъра.
				</p>
			</article>
			<article class="droplet">
				<h5>Имате нови <span>съобщения</span> в групата <a href="#">XI B</a></h5>
				<div class="timeago">Преди 19 часа</div>
				<p class="chat">
					... <br>
					"Аre we balak prati mi zadachata nai nakraq" - <span class="chat-title">Бойчо Огнянов в 13:39</span> <br>
					"Не мога са" - <span class="chat-title">Стоичко Влаха в 13:40</span> <br>
					"prati q de ae" - <span class="chat-title">Бойчо Огнянов в 13:41</span> <br>
					"shte q prepravq v burzinata" - <span class="chat-title">Бойчо Огнянов в 13:41</span> <br>
					"Стига бе, направи си я сам, елементарна е" - <span class="chat-title">Стоичко Влаха в 13:43</span> <br>
					"Аз ще ви я дам, небойте се" - <span class="chat-title">Отец Сисой в 13:45</span> <br>
					domashna.cpp - <span class="chat-title">Отец Сисой в 13:45</span> йл. 
				</p>
				<p>
					<a href="#">43 непрочетени съобщения в XI B</a> 
				</p>
				
			</article>
			<article class="droplet">
				<h5>Нов учебен материал</h5>
				<div class="timeago">Преди 1 ден</div>
				<p>
					Качени са нови уроци (5) за ЗП в раздел <a href="#" class="access-color">Powerpoint Access</a>.
				</p>
			</article>
			<article class="droplet">
				<h5>Нов съученик</h5>
				<div class="timeago">Преди 2 дни</div>
				<div class="clearfix">
					<div class="avatar-holder small fleft">
						<img src="images/avatar.jpg" class="avatar" alt="">
					</div>
					<div class="co-student"><a href="#">Николай Галчев</a> се регистрира като ученик във Вашия клас.</div>
				</div>
			</article>
		</section>
@endsection