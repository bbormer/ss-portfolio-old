@php
  $locale = isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2) : 'en';
@endphp

<x-layout>
  <div class="max-w-screen-md mx-auto">
    <x-slot name="title">about<br><span class="text-5xl">satomi suzuki</span></x-slot>
    {{-- <h1 class="mb-8 text-center text-5xl md:text-7xl font-['Montserrat'] font-[200]">about</h1> --}}
     
    
      <img src="/images/IMG_5737-45.jpg" class="px-5 pb-5 mx-auto mt-12 mb-10 transition-opacity"/>
    
    

    <div class="mb-10 px-3 font-[400] text-xl {{ $locale == 'ja' ? 'font-ja' : 'font-en'}}">{!! $locale == 'ja' ? '...まだ見たことのない景色...<br><br>
      ｢本当の美しさとは何でしょう。<br>私たちは、あらゆるものの美しさに触れる時、心が喜ぶ感覚を得ます。特に、出会った相手が何を思い、感じ、信じているのか——。そこに、その人の人生観やユニークさを見出す時、私たちは本当の美しさの一つを心の目で見ることが出来、共鳴を喜びます。私はこの瞬間が大好きです。<br>私は、目で見た景色をそのまま描くことがほとんどありません。心の目に映る美しさや物語を、見えるかたちで表現し、皆さんと分かち合うことが私の情熱だからです。<br>新しくて懐かしい「まだ見たことのない景色」を、誰かと共有できることは私にとって最高の悦びです。<br>そしてあなたが作品と出会うことによって、一つひとつの作品に秘められた物語が、こんどはあなたと共に新しく発展し、生き続けていくことを願っています。」<br><br>
       
      2014年、大病を患った恩師が、「さとみんの描くくまの絵が好き」とよく言っていたことを思い出し、師を励ますためだけに油彩を始める。油彩画家の清水新也氏に師事し、一作描き上げる頃には油彩に魅せられ2015年に都内で個展を行う。その後、「絵を描くことは大好きではあるが、これが何になるのだろう？」と疑問に思い2019年まで制作から遠ざかる。しかし絵を描くことは大切な自己表現であり、人生に必要な祈りの時間であると思い再開。絵を描く際に感じる大好きな気持ちや希望と癒しを人々と分かち合いたいと願い、2023年に都内で個展を開催。活動はblogとinstagramにて発信。<br><br>柔軟な発想をもとに大胆な色使いによって、繊細に描いていく。<br>作品の中に度々登場する蝶々は復活、美と変容の象徴であり、軽やかに舞う姿から悦びを表している。' : '<em>Sceneries never seen before...</em><br><br>“When we are touched by the beauty of everything, we feel a sense of joy in our hearts. Especially when we discover the uniqueness and perspective on life of the person, we meet through knowing what they think, feel, and believe, we see one of the true beauties in the inner eyes and rejoice in its resonance. I love these moments.<br><br>I almost never paint the scenery as I see them with my eyes. Because it is my passion to express and share with you the beauty and stories that I see with my inner eyes, as you can see them.<br>It is my greatest pleasure to be able to share ‘a new and nostalgic scenery you have never seen before’ with you.<br><br>And I hope that as you encounter my works, the stories behind each piece will continue to grow and live on with you.”<br><br>In 2014, her mentor fell seriously ill. At that time, she remembered that he used to say, “I like your bear’s doodle.” So, she started painting in oil just only to encourage him. (He got over the illness.) By the time she completed one painting, she was fascinated with oil painting and held her first solo exhibition in Tokyo in 2015.<br>After that she wondered, “I love painting but what’s the point of continuing to do this? Is it just self-satisfaction and not useful to society?” and she was away from painting until 2019. However, she restarted that painting is an important form of self-expression and time of prayer necessary for life. She wanted to share with people the hope and healing she felt through painting, so she held a solo exhibition in Tokyo in 2023.<br>Her news and activities will be posted on her blog and instagram.<br><br>She paints delicately with bold colors based on flexible ideas. The butterflies that frequently appear in her works are symbols of resurrection, beauty, and transformation, and its light dancing expresses joy.' !!}
    </div>
    
    
    <div class="divider mb-10 {{ $locale == 'ja' ? 'font-ja' : 'font-en'}}"><i class="fa-regular fa-comments fa-lg px-2"></i></div>

    <div class="italic text-lg">
    <div class="chat chat-start mb-5">
      <div class="chat-bubble bg-gray-200 dark:bg-[#2A323C] text-black dark:text-[#A6ADBA]">{!! $locale == 'ja' ? '無邪気でフレッシュな感性とロマンチックな遊び心が作品に滲み出ている。<br><small>– 60代男性、博士号学者 –</small>' : 'Her innocent, fresh sensibility and romantic sense of playfulness are exuded in her works.<br><small>– 60’s male, PhD, Social Psychology –</small>' !!}</div>
      </div>
    <div class="chat chat-start mb-5">
      <div class="chat-bubble bg-gray-200 dark:bg-[#2A323C] text-black dark:text-[#A6ADBA]">{!! $locale == 'ja' ? '見る人を励ますような力強さと温もりと癒しを感じる。<br><small>– 20代女性、学生 –</small>' : 'Feel strength, warmth, and healing that encourage the viewer.<br><small>– 20’s female, College Student –</small>' !!}</div>
      </div>
    <div class="chat chat-end mb-5">
      <div class="chat-bubble bg-gray-200 dark:bg-[#2A323C] text-black dark:text-[#A6ADBA]">{!! $locale == 'ja' ? '純真で思いやりある人柄と深い思想が絵を見るとわかる。<br><small>– 30代男性、美容師 –</small>' : 'Her pure and thoughtful personality and deep thoughts are evident in her paintings.<br><small>– 30’s male, Hairdresser –</small>' !!}</div>
      </div>
    <div class="chat chat-end mb-5">
      <div class="chat-bubble bg-gray-200 dark:bg-[#2A323C] text-black dark:text-[#A6ADBA]">{!! $locale == 'ja' ? '「人間の美しさはその人が内面にもつグラデーションカラーの幅」と、彼女が話す美的センスや人生に対する希望、人と関わることで喜びを見出す情熱が作品からも感じられる。<br><small>– 40代女性、会社員 –</small>' : 'As she says “The beauty of a person is the range of gradation of colors that a person has inside.” her works convey her aesthetic sense, her hope for life, and her passion for finding joy in interacting with people.<br><small>– 40’s female, IT professional –</small>' !!}</div>
      </div>
    <div class="chat chat-start mb-5">
      <div class="chat-bubble bg-gray-200 dark:bg-[#2A323C] text-black dark:text-[#A6ADBA]">{!! $locale == 'ja' ? '彼女の絵を見ていると童心の大切さを思い出す。<br><small>– 70代男性、会社経営者 –</small>' : 'Looking at her pictures reminds me of the importance of heart of a child.<br><small>– 70’s male, Company Owner –</small>' !!}</div>
      </div>
    </div>
  </div>
</x-layout>