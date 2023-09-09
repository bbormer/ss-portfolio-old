@php
  $locale = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
@endphp

<x-layout>
  <div class="max-w-screen-md mx-auto">
    <x-slot name="title">about</x-slot>
    {{-- <h1 class="mb-8 text-center text-5xl md:text-7xl font-['Montserrat'] font-[200]">about</h1> --}}
     
    
      <img src="/images/about-me.jpeg" class="pb-5 mx-auto mt-12 mb-10 transition-opacity"/>
    
    

    <div class="mb-10 px-3 font-[100] text-center text-xl {{ $locale == 'ja' ? 'font-ja' : 'font-en'}}">{!! $locale == 'ja' ? '時の変化や見えない存在を表す風と、再生と復活、美と変容を表す蝶々。<br><br>
      風におどらされることなく、どんな時も流されずにあらがわずに、意志を持って楽しく軽やかに、生きていく。<br><br>
      
      色とりどりの世界観で、愛と光をあらわします。<br><br>
      
      「すべての芸術は、誰かに五感で感じてもらって、初めて作品として命が宿る」。<br><br>
      
      これは、コミュニケーションの原点です。<br><br>
      
      作品たちは、個として存在しています。<br><br>
      
      彼らと出会ってくださるお一人お一人との間にコミュニケーションが生まれていくことは大きな願いであり、喜びです。<br><br>
      
      作品を見てくださることで、彼らに命が与えられ、皆様との間にコミュニケーションが生まれることをとても嬉しく楽しみに思っています。<br><br>
      
      私にとって制作は「産みの苦しみ」どころか、喜びと安心の時間です。<br><br>
      
      どの作品も、楽しみながら祈りながら描き上げました。<br><br>
      
      見てくださるあなたと、作品との間に素敵なケミストリーが生まれますように。' : 'The wind represents changes in time and invisible existences, while the butterflies represent rebirth and revival, beauty and transformation.<br><br>

Live happily and lightly with your will, without being blown away by the wind, without getting carried away or giving up.<br><br>

It expresses love and light with a colorful view of the world.<br><br>

“All art comes to life as a work of art only when someone feels it with all five senses.”<br><br>

This is the origin of communication.<br><br>

The works exist as individuals.<br><br>

It is my great hope and joy to create communication between them and each person they meet.<br><br>

I am very happy and looking forward to seeing my works bring them to life and creating communication with everyone.<br><br>

For me, production is a time of joy and peace of mind, far from being a “birth pain”.<br><br>

Every work was drawn while praying while having fun.<br><br>

I hope that a wonderful chemistry will be born between you who see it and the work.' !!}</div>
    
    <div class="divider mb-10 font-['Montserrat']"><i class="fa-regular fa-comments fa-lg px-2"></i></div>

    <div class="chat chat-start">
      <div class="chat-bubble">そこに ピーママと マンくんが やってきました。</div>
    </div>
    <div class="chat chat-start">
      <div class="chat-bubble">ママ、 あんなピーマンなんて、 みたことがないね</div>
    </div>
    <div class="chat chat-start">
      <div class="chat-bubble">なんだか へんてこね</div>
    </div>
    <div class="chat chat-end">
      <div class="chat-bubble">ほんとうは 、ピーマンなんじゃない？</div>
    </div>
    <div class="chat chat-end">
      <div class="chat-bubble">「ぼくはりんごです」っていいたくない。</div>
    </div>
  </div>
</x-layout>