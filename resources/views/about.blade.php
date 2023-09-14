@php
  $locale = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
@endphp

<x-layout>
  <div class="max-w-screen-md mx-auto">
    <x-slot name="title">about<br><span class="text-5xl">satomi suzuki</span></x-slot>
    {{-- <h1 class="mb-8 text-center text-5xl md:text-7xl font-['Montserrat'] font-[200]">about</h1> --}}
     
    
      <img src="/images/about-me.jpeg" class="pb-5 mx-auto mt-12 mb-10 transition-opacity"/>
    
    

    <div class="mb-10 px-3 font-[400] text-xl {{ $locale == 'ja' ? 'font-ja' : 'font-en'}}">{!! $locale == 'ja' ? '2014年、恩師が大病を患った。その際に「あなたのくまの絵が好き」とよく言われていたことを思い出し、恩師を励ますためだけに油彩を始める。油彩画家の清水新也氏に師事し、一作描き上げる頃には油彩に魅せられ2015年に都内で個展を行う。その後、「絵を描くことは大好きではあるが、これが何になるのだろう？」と疑問に思い2019年まで制作から遠ざかる。しかし、絵を描くことは、神を喜び礼拝することであり、祈ることであり、自分にとって癒しの時間であると気づき、その希望を人々と分かち合いたいと願い再開し2023年に都内で個展を開催した。<br><br>柔軟な発想をもとに大胆な色使いによって、繊細に描いていく。作品の中に度々登場する蝶々は復活、美と変容の象徴であり、希望と喜びを表している。' : 'In 2014, her mentor fell seriously ill. At that time, she remembered that her mentor used to say, “I like your drawing of bears.” So she started painting in oil just only to encourage him. (He got over from the illness.) By the time she completed one painting, she was fascinated with oil painting and held a first solo exhibition in Tokyo in 2015. <br>After that she wondered, “I love painting but what’s the point of continßuing to do this? Is it just self-satisfaction and not useful to the world?” and she was away from painting until 2019. However, she realized that painting is a meaning of worship, a prayer, and a healing time spent with God for her. She wanted to share it with the hope with others, so she restarted painting and held a solo exhibition in Tokyo in 2023.<br><br>Based on flexible ideas, she create with bold colors and delicate drawing touch. <br>Butterflies, which often appear in her works are symbols of resurrection, beauty and transformation, and represent hope and joy.' !!}</div>
    
    
    <div class="divider mb-10 {{ $locale == 'ja' ? 'font-ja' : 'font-en'}}"><i class="fa-regular fa-comments fa-lg px-2"></i></div>

    <div class="italic text-lg">
    <div class="chat chat-start mb-5">
      <div class="chat-bubble bg-gray-200 dark:bg-[#2A323C] text-black dark:text-[#A6ADBA]">{!! $locale == 'ja' ? '無邪気でフレッシュな感性とロマンチックな遊び心が作品に滲み出ている。' : 'Her innocent, fresh sensibility and romantic sense of playfulness are exuded in her works.' !!}</div>
      </div>
    <div class="chat chat-start mb-5">
      <div class="chat-bubble bg-gray-200 dark:bg-[#2A323C] text-black dark:text-[#A6ADBA]">{!! $locale == 'ja' ? '見る人を励ますような力強さと温もりと癒しを感じる。' : 'Feel strength, warmth, and healing that encourage the viewer.' !!}</div>
      </div>
    <div class="chat chat-start mb-5">
      <div class="chat-bubble bg-gray-200 dark:bg-[#2A323C] text-black dark:text-[#A6ADBA]">{!! $locale == 'ja' ? '純真で思いやりある人柄と深い思想が絵を見るとわかる。' : 'Her pure and thoughtful personality and deep thoughts are evident in her paintings.' !!}</div>
      </div>
    <div class="chat chat-end mb-5">
      <div class="chat-bubble bg-gray-200 dark:bg-[#2A323C] text-black dark:text-[#A6ADBA]">{!! $locale == 'ja' ? '「人間の美しさはその人が内面にもつグラデーションカラーの幅」と、彼女が話す美的センスや人生に対する希望、人と関わることで喜びを見出す情熱が作品からも感じられる。' : 'As she says “The beauty of a person is the range of gradation of colors that a person has inside.” her works convey her aesthetic sense, her hope for life, and her passion for finding joy in interacting with people.' !!}</div>
      </div>
    <div class="chat chat-end mb-5">
      <div class="chat-bubble bg-gray-200 dark:bg-[#2A323C] text-black dark:text-[#A6ADBA]">{!! $locale == 'ja' ? '彼女の絵を見ていると童心の大切さを思い出す。' : 'Looking at her pictures reminds me of the importance of heart of a child.' !!}</div>
      </div>
    </div>
  </div>
</x-layout>