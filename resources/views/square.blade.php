@php
  $locale = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
  App::setLocale($locale);
  $statusValid = session()->get('validateStatus');
  // echo $_SERVER['HTTP_REFERER'];
@endphp

    <x-layout>
      <x-slot name="title">purchase</x-slot>

      <figure x-data class="mx-auto w-[30%]"><img :src="`/images/{{ $gallery['file'] }}`" class="mb-30 mt-12 mb-6" /></figure>
      <div class="text-xl  text-center"> <!-- text-green-500 -->
        <p>{{ $locale == 'ja' ? $gallery['title-ja'] : $gallery['title-en']}}</p>
        <p>{{ number_format($gallery['amount']) }}円 {{ __('(incl. tax)') }}</p>
        {{-- <p class="text-base">{{ $locale == 'ja' ? '送料' : 'shipping'}}: {{ number_format($gallery['shipping']) }}円</p> --}}
        <p class="text-base">{{ __('shipping')}}: {{ number_format($gallery['shipping']) }}円</p>
      </div>

      <div class="dark-mode">
        @if(!$statusValid)
        <div id="shipInfoForm" class="p-6 border border-gray-300 sm:rounded-md w-full md:w-[40%] md:max-w-full mx-auto mt-12">
          <h1 class="text-xl text-green-500 mb-5">{{ __('shipping info') }}</h1>
          <form method="POST" action="/square/validate/{{ $gallery['id'] }}">
            @csrf
            <label class="block mb-6">
              <input
                id="formName"
                name="name"
                type="text"
                class="
                  block
                  w-full
                  mt-1
                  border-gray-300
                  rounded-md
                  shadow-sm
                  focus:border-indigo-300
                  focus:ring
                  focus:ring-indigo-200
                  focus:ring-opacity-50
                  placeholder:text-green-500 dark:placeholder-green-700
                "
                placeholder="{{ __('name (required)' )}}"
                value="{{ old('name') }}"
              />
              @error('name')
                <p class="text-red-500 text-sm mt-1">{{ __('name is required') }}</p>
              @enderror
            </label>
            <label class="block mb-6">
              <input
                id="formEmail"
                name="email"
                type="text"
                class="
                  block
                  w-full
                  mt-1
                  border-gray-300
                  rounded-md
                  shadow-sm
                  focus:border-indigo-300
                  focus:ring
                  focus:ring-indigo-200
                  focus:ring-opacity-50
                  placeholder:text-green-500 dark:placeholder-green-700
                  "
                placeholder="{{ __('email (required)') }}"
                value="{{ old('email') }}"
              />
              @error('email')
                @if (str_contains($message, 'valid')) 
                  <p class="text-red-500 text-sm mt-1">{{ __('email is invalid') }}</p>
                  @else
                  <p class="text-red-500 text-sm mt-1">{{ __('email is required') }}</p>
                  @endif
                  @enderror
                </label>
                <label x-data="{ telephone: ''}" class="block mb-6">
                  <input
                    id="formPhone"
                    name="phone"
                    type="text"
                    class="
                      block
                      w-full
                      mt-1
                      border-gray-300
                      rounded-md
                      shadow-sm
                      focus:border-indigo-300
                      focus:ring
                      focus:ring-indigo-200
                      focus:ring-opacity-50
                      placeholder:text-green-500 dark:placeholder-green-700
                    "
                    placeholder="{{ __('phone (required)') }}"
                    value="{{ old('phone') }}"
                  />
                  @error('phone')
                    @if (str_contains($message, 'valid')) 
                      <p class="text-red-500 text-sm mt-1">{{ __('phone number is invalid') }}</p>
                    @else
                      <p class="text-red-500 text-sm mt-1">{{ __('phone number is required') }}</p>
                    @endif
                  @enderror              
                </label>
                <label class="block mb-6">
                  <input
                    id="formZip"
                    name="zip"
                    type="text"
                    class="
                      block
                      w-full
                      mt-1
                      border-gray-300
                      rounded-md
                      shadow-sm
                      focus:border-indigo-300
                      focus:ring
                      focus:ring-indigo-200
                      focus:ring-opacity-50
                      placeholder:text-green-500 dark:placeholder-green-700
                    "
                    placeholder="{{ __('postal code (required | auto-fill address)') }}"
                    value="{{ old('zip') }}"
                  />
                  @error('zip')
                    @if (str_contains($message, 'valid')) 
                      <p class="text-red-500 text-sm mt-1">{{ __('postal code is invalid') }}</p>
                    @else
                      <p class="text-red-500 text-sm mt-1">{{ __('postal code is required') }}</p>
                    @endif
                  @enderror
                </label>
                <label class="block mb-6">
                  <input
                    id="formState"
                    name="state"
                    type="text"
                    class="
                      block
                      w-full
                      mt-1
                      border-gray-300
                      rounded-md
                      shadow-sm
                      focus:border-indigo-300
                      focus:ring
                      focus:ring-indigo-200
                      focus:ring-opacity-50
                      {{-- {{ $locale == 'ja' ? 'font-ja' : 'font-en'}} --}}
                      placeholder:text-green-500 dark:placeholder-green-700
                      "
                    placeholder="{{ __('prefecture (required)') }}"
                    value="{{ old('state') }}"
                  />
                  @error('state')
                    <p class="text-red-500 text-sm mt-1">{{ __('prefecture is required')}}</p>
                  @enderror
                </label>
                <label class="block mb-6">
                  <input
                    id="formCity"
                    name="city"
                    type="text"
                    class="
                      block
                      w-full
                      mt-1
                      border-gray-300
                      rounded-md
                      shadow-sm
                      focus:border-indigo-300
                      focus:ring
                      focus:ring-indigo-200
                      focus:ring-opacity-50
                      placeholder:text-green-500 dark:placeholder-green-700
                    "
                    placeholder="{{ __('city (required)')}}"
                    value="{{ old('city') }}"
                  />
                  @error('city')
                  <p class="text-red-500 text-sm mt-1">{{ __('city is required') }}</p>
                @enderror
                </label>
            <label class="block mb-6">
              <input
                id="formAddress1"
                name="address1"
                type="text"
                class="
                  block
                  w-full
                  mt-1
                  border-gray-300
                  rounded-md
                  shadow-sm
                  focus:border-indigo-300
                  focus:ring
                  focus:ring-indigo-200
                  focus:ring-opacity-50
                  placeholder:text-green-500 dark:placeholder-green-700
                "
                placeholder="{{ __('address line 1 (required)') }}"
                value="{{ old('address1') }}"
              />
              @error('address1')
                <p class="text-red-500 text-sm mt-1">{{ __('address line 1 is required') }}</p>
              @enderror
            </label>
            <label class="block mb-6">
              <input
                id="formAddress2"
                name="address2"
                type="text"
                class="
                  block
                  w-full
                  mt-1
                  border-gray-300
                  rounded-md
                  shadow-sm
                  focus:border-indigo-300
                  focus:ring
                  focus:ring-indigo-200
                  focus:ring-opacity-50
                  {{-- {{ $locale == 'ja' ? 'font-ja' : 'font-en'}} --}}
                  placeholder:text-green-500 dark:placeholder-green-700
                  "
                placeholder="{{ __('address line 2') }}"
                value="{{ old('address2') }}"
              />
              @error('address2')
              @enderror
            </label>
            
            
            {{-- <label class="block mb-6">
              <input
                name="country"
                type="text"
                class="
                  block
                  w-full
                  mt-1
                  border-gray-300
                  rounded-md
                  shadow-sm
                  focus:border-indigo-300
                  focus:ring
                  focus:ring-indigo-200
                  focus:ring-opacity-50
                  placeholder:text-green-500 dark:placeholder-green-700
                "
                placeholder="{{ __('country') }}"
                value="{{ old('country') }}"
              />
            </label> --}}
            
            
            <div class="mb-6">
              <button
                type="submit"
                id="confirmShipInfo"
                {{-- x-on:click="showForm = ! showForm" --}}
                class="
                  {{-- h-10 --}}
                  px-5
                  text-indigo-100
                  font-[700]
                  bg-indigo-700
                  rounded-lg
                  transition-colors
                  duration-150
                  focus:shadow-outline
                  hover:bg-indigo-800
                  {{-- {{ $locale == 'ja' ? 'font-ja' : 'font-en'}} --}}
                "
              >
              {{ __('confirm') }}
              </button>
            </div>
            
          </form>        
        </div>
        @else
        <div id="app">
          <div class="w-full md:w-[40%] md:max-w-full mx-auto mt-12" id="shipInfo">
            <div class="text-center">
              <h3 class=" mb-2 text-xl">{{ __('shipping info') }}</h3> <!-- text-green-500 -->
              <p id="shipName">{{ session()->get('name') }}</p>
              <p id="shipAddress">{{ __('address: ') }}{{ session()->get('zip') }}<br>{{ session()->get('state') }}{{ session()->get('city') }}<br>{{ session()->get('address1') }} {{ session()->get('address2') }}</p>
              <p id="shipPhone"><i class="fa-solid fa-phone"></i>：{{ session()->get('phone') }}</p>
              <p id="shipEmail"><i class="fa-solid fa-envelope"></i>：{{ session()->get('email') }}</p>
              {{-- <button id="editShipInfo" class="!bg-green-500 mt-5 w-[70px]">{{ $locale == 'ja' ? '編集' : 'edit'}}</button>  --}}
            </div>
              <form id="payment-form">
                @csrf
                  <div id="card-container"></div>
                  <button id="card-button" type="button"　class="bg-green-300">{{ $locale == 'ja' ? '' : 'pay '}}{{ number_format($gallery['amount'] + $gallery['shipping'])}}円{{ $locale == 'ja' ? '支払う' : ''}}</button>
                  <p class="mt-8 text-center text-2xl"><i class="fa-brands fa-cc-visa"></i> <i class="fa-brands fa-cc-mastercard"></i> <i class="fa-brands fa-cc-amex"></i> <i class="fa-brands fa-cc-jcb"></i> <i class="fa-brands fa-cc-diners-club"></i> <i class="fa-brands fa-cc-discover"></i></p>
              </form>
              <div id="payment-status-container"></div>
          </div>
        </div>
        @endif
      </div>
  </x-layout>





  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <!-- Styles -->
  {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
  <!-- Script -->
  {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
  <!-- Square -->


  <style>
      * {
          box-sizing: border-box;
      }

      body {
          font-family: Arial, sans-serif;
      }

      #payment-form {
          max-width: 550px;
          min-width: 300px;
          margin: 10% auto 10% auto;
      }

      .buyer-inputs {
          display: flex;
          gap: 20px;
          justify-content: space-between;
          border: none;
          margin: 0;
          padding: 0;
      }

      #card-container {
          margin-top: 45px;
          /* this height depends on the size of the container element */
          /* We transition from a single row to double row at 485px */
          /* Settting this min-height minimizes the impact of the card form loading */
          min-height: 90px;
      }

      #gift-card-container {
          margin-top: 45px;
          min-height: 90px;
      }

      @media screen and (max-width: 500px) {
          #card-container {
              min-height: 140px;
          }
      }

      #ach-button {
          margin-top: 20px;
      }

      #landing-page-layout {
          width: 80%;
          margin: 150px auto;
          max-width: 1000px;
      }

      #its-working {
          color: #737373;
      }

      #example-container {
          width: 100%;
          border: 1px solid #b3b3b3;
          padding: 48px;
          margin: 32px 0;
          border-radius: 12px;
      }

      #example-list {
          display: flex;
          flex-direction: column;
          gap: 15px;
      }

      h3 {
          margin: 0;
      }

      p {
          line-height: 24px;
      }

      label {
          font-size: 12px;
          width: 100%;
      }

      input {
          padding: 12px;
          width: 100%;
          border-radius: 5px;
          border-width: 1px;
          margin-top: 20px;
          font-size: 16px;
          border: 1px solid rgba(0, 0, 0, 0.15);
      }

      input:focus {
          border: 1px solid #006aff;
      }

      button {
          color: #ffffff;
          background-color: #006aff !important;
          border-radius: 5px;
          cursor: pointer;
          border-style: none;
          user-select: none;
          outline: none;
          font-size: 16px;
          font-weight: 500;
          line-height: 24px;
          padding: 12px;
          width: 100%;
          box-shadow: 1px;
      }

      button:active {
          background-color: rgb(0, 85, 204);
      }

      button:disabled {
          background-color: rgba(0, 0, 0, 0.05);
          color: rgba(0, 0, 0, 0.3);
      }

      #payment-status-container {
          display: flex;
          align-items: center;
          justify-content: center;
          border: 1px solid rgba(0, 0, 0, 0.05);
          box-sizing: border-box;
          border-radius: 50px;
          margin: 0 auto;
          width: 350px;
          height: 48px;
          visibility: hidden;
      }

      #payment-status-container.missing-credentials {
          width: 350px;
      }

      #payment-status-container.is-success:before {
          content: '';
          background-color: #00b23b;
          width: 16px;
          height: 16px;
          margin-right: 16px;
          -webkit-mask: url("data:image/svg+xml,%3Csvg width='16' height='16' viewBox='0 0 16 16' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M8 16C12.4183 16 16 12.4183 16 8C16 3.58172 12.4183 0 8 0C3.58172 0 0 3.58172 0 8C0 12.4183 3.58172 16 8 16ZM11.7071 6.70711C12.0968 6.31744 12.0978 5.68597 11.7093 5.29509C11.3208 4.90422 10.6894 4.90128 10.2973 5.28852L11 6C10.2973 5.28852 10.2973 5.28853 10.2973 5.28856L10.2971 5.28866L10.2967 5.28908L10.2951 5.29071L10.2886 5.29714L10.2632 5.32224L10.166 5.41826L9.81199 5.76861C9.51475 6.06294 9.10795 6.46627 8.66977 6.90213C8.11075 7.4582 7.49643 8.07141 6.99329 8.57908L5.70711 7.29289C5.31658 6.90237 4.68342 6.90237 4.29289 7.29289C3.90237 7.68342 3.90237 8.31658 4.29289 8.70711L6.29289 10.7071C6.68342 11.0976 7.31658 11.0976 7.70711 10.7071L11.7071 6.70711Z' fill='black' fill-opacity='0.9'/%3E%3C/svg%3E");
          mask: url("data:image/svg+xml,%3Csvg width='16' height='16' viewBox='0 0 16 16' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M8 16C12.4183 16 16 12.4183 16 8C16 3.58172 12.4183 0 8 0C3.58172 0 0 3.58172 0 8C0 12.4183 3.58172 16 8 16ZM11.7071 6.70711C12.0968 6.31744 12.0978 5.68597 11.7093 5.29509C11.3208 4.90422 10.6894 4.90128 10.2973 5.28852L11 6C10.2973 5.28852 10.2973 5.28853 10.2973 5.28856L10.2971 5.28866L10.2967 5.28908L10.2951 5.29071L10.2886 5.29714L10.2632 5.32224L10.166 5.41826L9.81199 5.76861C9.51475 6.06294 9.10795 6.46627 8.66977 6.90213C8.11075 7.4582 7.49643 8.07141 6.99329 8.57908L5.70711 7.29289C5.31658 6.90237 4.68342 6.90237 4.29289 7.29289C3.90237 7.68342 3.90237 8.31658 4.29289 8.70711L6.29289 10.7071C6.68342 11.0976 7.31658 11.0976 7.70711 10.7071L11.7071 6.70711Z' fill='black' fill-opacity='0.9'/%3E%3C/svg%3E");
      }

      #payment-status-container.is-success:after {
          content: "{{ __('Payment successful') }}";
          font-size: 18px;
          line-height: 16px;
      }

      #payment-status-container.is-failure:before {
          content: '';
          background-color: #cc0023;
          width: 16px;
          height: 16px;
          margin-right: 16px;
          -webkit-mask: url("data:image/svg+xml,%3Csvg width='16' height='16' viewBox='0 0 16 16' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M8 16C12.4183 16 16 12.4183 16 8C16 3.58172 12.4183 0 8 0C3.58172 0 0 3.58172 0 8C0 12.4183 3.58172 16 8 16ZM5.70711 4.29289C5.31658 3.90237 4.68342 3.90237 4.29289 4.29289C3.90237 4.68342 3.90237 5.31658 4.29289 5.70711L6.58579 8L4.29289 10.2929C3.90237 10.6834 3.90237 11.3166 4.29289 11.7071C4.68342 12.0976 5.31658 12.0976 5.70711 11.7071L8 9.41421L10.2929 11.7071C10.6834 12.0976 11.3166 12.0976 11.7071 11.7071C12.0976 11.3166 12.0976 10.6834 11.7071 10.2929L9.41421 8L11.7071 5.70711C12.0976 5.31658 12.0976 4.68342 11.7071 4.29289C11.3166 3.90237 10.6834 3.90237 10.2929 4.29289L8 6.58579L5.70711 4.29289Z' fill='black' fill-opacity='0.9'/%3E%3C/svg%3E%0A");
          mask: url("data:image/svg+xml,%3Csvg width='16' height='16' viewBox='0 0 16 16' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M8 16C12.4183 16 16 12.4183 16 8C16 3.58172 12.4183 0 8 0C3.58172 0 0 3.58172 0 8C0 12.4183 3.58172 16 8 16ZM5.70711 4.29289C5.31658 3.90237 4.68342 3.90237 4.29289 4.29289C3.90237 4.68342 3.90237 5.31658 4.29289 5.70711L6.58579 8L4.29289 10.2929C3.90237 10.6834 3.90237 11.3166 4.29289 11.7071C4.68342 12.0976 5.31658 12.0976 5.70711 11.7071L8 9.41421L10.2929 11.7071C10.6834 12.0976 11.3166 12.0976 11.7071 11.7071C12.0976 11.3166 12.0976 10.6834 11.7071 10.2929L9.41421 8L11.7071 5.70711C12.0976 5.31658 12.0976 4.68342 11.7071 4.29289C11.3166 3.90237 10.6834 3.90237 10.2929 4.29289L8 6.58579L5.70711 4.29289Z' fill='black' fill-opacity='0.9'/%3E%3C/svg%3E%0A");
      }

      #payment-status-container.is-failure:after {
          content: "{{ __('Payment failed') }}";
          font-size: 18px;
          line-height: 16px;
      }

      #payment-status-container.missing-credentials:before {
          content: '';
          background-color: #cc0023;
          width: 16px;
          height: 16px;
          margin-right: 16px;
          -webkit-mask: url("data:image/svg+xml,%3Csvg width='16' height='16' viewBox='0 0 16 16' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M8 16C12.4183 16 16 12.4183 16 8C16 3.58172 12.4183 0 8 0C3.58172 0 0 3.58172 0 8C0 12.4183 3.58172 16 8 16ZM5.70711 4.29289C5.31658 3.90237 4.68342 3.90237 4.29289 4.29289C3.90237 4.68342 3.90237 5.31658 4.29289 5.70711L6.58579 8L4.29289 10.2929C3.90237 10.6834 3.90237 11.3166 4.29289 11.7071C4.68342 12.0976 5.31658 12.0976 5.70711 11.7071L8 9.41421L10.2929 11.7071C10.6834 12.0976 11.3166 12.0976 11.7071 11.7071C12.0976 11.3166 12.0976 10.6834 11.7071 10.2929L9.41421 8L11.7071 5.70711C12.0976 5.31658 12.0976 4.68342 11.7071 4.29289C11.3166 3.90237 10.6834 3.90237 10.2929 4.29289L8 6.58579L5.70711 4.29289Z' fill='black' fill-opacity='0.9'/%3E%3C/svg%3E%0A");
          mask: url("data:image/svg+xml,%3Csvg width='16' height='16' viewBox='0 0 16 16' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M8 16C12.4183 16 16 12.4183 16 8C16 3.58172 12.4183 0 8 0C3.58172 0 0 3.58172 0 8C0 12.4183 3.58172 16 8 16ZM5.70711 4.29289C5.31658 3.90237 4.68342 3.90237 4.29289 4.29289C3.90237 4.68342 3.90237 5.31658 4.29289 5.70711L6.58579 8L4.29289 10.2929C3.90237 10.6834 3.90237 11.3166 4.29289 11.7071C4.68342 12.0976 5.31658 12.0976 5.70711 11.7071L8 9.41421L10.2929 11.7071C10.6834 12.0976 11.3166 12.0976 11.7071 11.7071C12.0976 11.3166 12.0976 10.6834 11.7071 10.2929L9.41421 8L11.7071 5.70711C12.0976 5.31658 12.0976 4.68342 11.7071 4.29289C11.3166 3.90237 10.6834 3.90237 10.2929 4.29289L8 6.58579L5.70711 4.29289Z' fill='black' fill-opacity='0.9'/%3E%3C/svg%3E%0A");
      }

      #payment-status-container.missing-credentials:after {
          content: 'applicationId and/or locationId is incorrect';
          font-size: 14px;
          line-height: 16px;
      }

      /* .dark-mode {
  background-color: #2A323C; //#080808;
} */

/* .dark-mode button {
  background-color: #006aff;
}

.dark-mode #payment-status-container.is-success:after {
  color: #ffffff;
}

.dark-mode #payment-status-container.is-failure:after {
  color: #ffffff;
}

.dark-mode #payment-status-container.missing-credentials:after {
  color: #ffffff;
} */

.dark-mode #payment-status-container {
  background-color: #2d2d2d;
  border-color: #2d2d2d;
}
  </style>
  <script
      type="text/javascript"
      src="https://sandbox.web.squarecdn.com/v1/square.js"
  ></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script>
      const darkModeCardStyle = {
        '.input-container': {
          borderColor: '#2D2D2D',
          borderRadius: '6px',
        },
        '.input-container.is-focus': {
          borderColor: '#006AFF',
        },
        '.input-container.is-error': {
          borderColor: '#ff1600',
        },
        '.message-text': {
          color: '#999999',
        },
        '.message-icon': {
          color: '#999999',
        },
        '.message-text.is-error': {
          color: '#ff1600',
        },
        '.message-icon.is-error': {
          color: '#ff1600',
        },
        input: {
          backgroundColor: '#2D2D2D',
          color: '#000000',
          fontFamily: 'helvetica neue, sans-serif',
          fontSize: '16px',
        },
        'input::placeholder': {
          color: '#999999',
        },
        'input.is-error': {
          color: '#ff1600',
        },
           
      };

      const appId = "{{ config('square.application_id') }}";
      const locationId = "{{ config('square.location_id') }}";
      const idempotencyKey = "{{ uniqid() }}";

      async function initializeCard(payments) {
          // const card = await payments.card();
          const card = await payments.card({
            style: darkModeCardStyle,
          });
          await card.attach('#card-container');
          return card;
      }

      // Call this function to send a payment token, buyer name, and other details
      // to the project server code so that a payment can be created with
      // Payments API
      async function createPayment(token) {
        console.log('entering createPayment')
          const body = JSON.stringify({
              locationId,
              sourceId: token,
              idempotencyKey,
              email: `{{ session()->get('email') }}`,
              address1: `{{ session()->get('address1') }}`, 
              address2: `{{ session()->get('address2') }}`,
              city: `{{ session()->get('city') }}`,
              state: `{{ session()->get('state') }}`,
              zip: `{{ session()->get('zip') }}`,
              amount: `{{ $gallery['amount'] + $gallery['shipping'] }}`,
              note: `商品：{{ $gallery['title-ja'] }}, 住所：{{ session()->get('state') }} {{ session()->get('city') }} {{ session()->get('address1') }} {{ session()->get('address2') }}, 電話：{{ session()->get('phone') }}, 氏名：{{ session()->get('name') }}, e-mail：{{ session()->get('email') }}`
          });
          const paymentResponse = await fetch('/square/createPayment', {
              method: 'POST',
              headers: {
                  'Content-Type': 'application/json',
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              body,
          });
          if (paymentResponse.ok) {
            // console.log(paymentResponse.json());
              return paymentResponse.json();
          }
          const errorBody = await paymentResponse.text();
          console.log(errorBody)

          throw new Error(errorBody);
      }

      

      // This function tokenizes a payment method.
      // The ‘error’ thrown from this async function denotes a failed tokenization,
      // which is due to buyer error (such as an expired card). It is up to the
      // developer to handle the error and provide the buyer the chance to fix
      // their mistakes.
      async function tokenize(paymentMethod) {
        console.log('entering tokenize')
          const tokenResult = await paymentMethod.tokenize();
          if (tokenResult.status === 'OK') {
            console.log("token:" + tokenResult.token)
              return tokenResult.token;

          } else {
              let errorMessage = `Tokenization failed-status: ${tokenResult.status}`;
              if (tokenResult.errors) {
                  errorMessage += ` and errors: ${JSON.stringify(
                      tokenResult.errors
                  )}`;
                  console.log(errorMessage)
              }
              throw new Error(errorMessage);
          }
      }

      // Helper method for displaying the Payment Status on the screen.
      // status is either SUCCESS or FAILURE;
      function displayPaymentResults(status) {
        console.log('entering displayPaymentResults')
          const statusContainer = document.getElementById(
              'payment-status-container'
          );
          if (status === 'SUCCESS') {
              statusContainer.classList.remove('is-failure');
              statusContainer.classList.add('is-success');
              // editShipInfo.style.visibility = "hidden"
              // cardButton.disabled = false;
              @php
                session()->forget(['validateStatus','name','email','address1','address2','city','state','zip','phone']);
                session(['validateStatus' => 0]);
              @endphp
          } else {
              statusContainer.classList.remove('is-success');
              statusContainer.classList.add('is-failure');
          }

          statusContainer.style.visibility = 'visible';
      }

      window.addEventListener('load', async function () {
          // if (!window.Square) {
          //     throw new Error('Square.js failed to load properly');
          // }

          console.log('entering window.Square.payments')
          const payments = window.Square.payments(appId, locationId);
          let card;
          try {
              console.log('entering initializeCard')
              card = await initializeCard(payments);
              console.log(card)
          } catch (e) {
              console.error('Initializing Card failed', e);
              return;
          }

          // Checkpoint 2.
          async function handlePaymentMethodSubmission(event, paymentMethod) {
              event.preventDefault();
              console.log('entering handlePaymentMethodSubmission')
              try {
                  // disable the submit button as we await tokenization and make a
                  // payment request.
                  cardButton.disabled = true;
                  const token = await tokenize(paymentMethod);
                  const paymentResults = await createPayment(token);
                  displayPaymentResults('SUCCESS');
                  console.log('Payment Success', paymentResults.payment.id);
              } catch (e) {
                console.log('after createPayment failed');
                  cardButton.disabled = false;
                  displayPaymentResults('FAILURE');
                  console.error(e.message);
              }
          }

          const cardButton = document.getElementById(
              'card-button'
          );
          cardButton.addEventListener('click', async function (event) {
              await handlePaymentMethodSubmission(event, card);
          });
      });

      // 郵便番号検索
      const formZip = document.getElementById('formZip');
      const formAddress1 = document.getElementById('formAddress1');
      const formCity = document.getElementById('formCity');
      const formState = document.getElementById('formState');

      formZip.addEventListener('focusout', ()=>{
        if (formZip.value != "") {
    
            let api = 'https://zipcloud.ibsnet.co.jp/api/search?zipcode=';
            let url = api + formZip.value;
            
            fetch(url, {
                timeout: 10000, //タイムアウト時間
            })
            .then((response)=>{
                //</tbody>error.textContent = ''; //HTML側のエラーメッセージ初期化*/
                return response.json();  
            })
            .then((data)=>{
            /* if(data.status === 400){ //エラー時
                    alert("error.textContent");
                }else*/ if(data.results === null){
                    alert('郵便番号から住所が見つかりませんでした。');
                    address.value = "";
                } else {
                    formState.value = data.results[0].address1;
                    formCity.value = data.results[0].address2;
                    formAddress1.value = data.results[0].address3;
                }
            })
            .catch((ex)=>{ //例外処理
                console.log(ex);
            });
        }
    }); 
  </script>