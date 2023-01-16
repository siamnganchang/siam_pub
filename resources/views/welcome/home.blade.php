<x-guest-layout >
    <br>
    <main class="">
        <div class="flex flex-col my-6 mx-4 rounded-2xl shadow-xl shadow-gray-500">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              @foreach ($designs as $m)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{$m->id - 1}}" class="{{$m->id == 1 ? 'active' : '' }}"></li>
              @endforeach
            </ol>
            <div class="carousel-inner">
                @foreach ($designs as $m)

                <div class="carousel-item {{$loop->index + 1-1 == 0 ? 'active' : '' }}">
                  <img class="d-block w-100 aspect-169" src="{{$m->image_path}}" alt="First slide">
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    

        <div class="p-4 block  items-center justify-between border-b border-gray-200 mt-8">
            <div class="block items-center mb-3 divide-x divide-gray-100  sm:mb-0">

                <div class=" justify-start items-center">
                    <div class="p-6 max-w-xl mx-auto bg-white rounded-xl shadow-lg flex items-center space-x-4">
                        <div class="shrink-0">
                            <svg class="text-dark mb-1" width="12px" height="12px" viewBox="0 0 44 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>megaphone</title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-2168.000000, -591.000000)" fill="currentColor" fill-rule="nonzero">
                                        <g transform="translate(1716.000000, 291.000000)">
                                            <g transform="translate(452.000000, 300.000000)">
                                                <path class="color-background" d="M35.7958333,0.273166667 C35.2558424,-0.0603712374 34.5817509,-0.0908856664 34.0138333,0.1925 L19.734,7.33333333 L9.16666667,7.33333333 C4.10405646,7.33333333 0,11.4373898 0,16.5 C0,21.5626102 4.10405646,25.6666667 9.16666667,25.6666667 L19.734,25.6666667 L34.0138333,32.8166667 C34.5837412,33.1014624 35.2606401,33.0699651 35.8016385,32.7334768 C36.3426368,32.3969885 36.6701539,31.8037627 36.6666942,31.1666667 L36.6666942,1.83333333 C36.6666942,1.19744715 36.3370375,0.607006911 35.7958333,0.273166667 Z">
                                                </path>
                                                <path class="color-background" d="M38.5,11 L38.5,22 C41.5375661,22 44,19.5375661 44,16.5 C44,13.4624339 41.5375661,11 38.5,11 Z" opacity="0.601050967"></path>
                                                <path class="color-background" d="M18.5936667,29.3333333 L10.6571667,29.3333333 L14.9361667,39.864 C15.7423448,41.6604248 17.8234451,42.4993948 19.6501416,41.764381 C21.4768381,41.0293672 22.3968823,38.982817 21.7341667,37.1286667 L18.5936667,29.3333333 Z" opacity="0.601050967"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div>
                          <h2 class="text-xl font-normal text-gray-900">สยามงานช่าง</h2>
                          <p class="text-md text-gray-600">บริการออกแบบ เขียนแบบงานเครื่องกลและระบบขนส่งลำเลียง งานติดตั้ง ซ่อมบำรุง!</p>
                        </div>
                      </div>
                    <div id="michael-tooltip" role="tooltip"
                        class="inline-block absolute z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-2xl transition-opacity duration-300 tooltip shadow-lg-sm opacity-0 invisible"
                        style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, -56px, 0px);"
                        data-popper-placement="bottom" data-popper-reference-hidden="" data-popper-escaped="">
                        
                        <div class="tooltip-arrow" data-popper-arrow=""  style="position: absolute; left: 0px; transform: translate3d(0px, 0px, 0px);"></div>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="">
            <div class="overflow-x-auto ">
                <div class="inline-block min-w-full align-middle ">
                    <div class="overflow-hidden shadow-lg ">
                        <div class=" justify-start items-start px-4 mb-6 space-x-6 ">
                            <div class="grid grid-rows-4 grid-flow-col gap-4 ">

                                <div>
                                    <div class="p-4 mb-6 space-y-6 bg-gray-200 ">
                                        <div class="grid grid-rows-4 grid-flow-col gap-4 ">
                                            @foreach ($works as $work)
                                                <div class=" shadow-xl rounded-xl tracking-in-expand-fwd-bottom" style="width: 400px">
                                             <div class="container">
                                                    <div class="flex justify-center pb-4 ">
                                                      @foreach($work->images as $img)
                                                        @if($loop->first)
                                                            <img class=" rounded-md aspect-1 boxWork mt-3" src="{{$img->image_path}}" alt="image description">
                                                        @endif
                                                        @endforeach
                                                    </div>
                                                    <div class="flex flex-col">
                                                        
                                                        <p class="text-overflownew mt-2 text-sm leading-6 col-start-1 sm:col-span-2 lg:mt-6 lg:row-start-4 lg:col-span-1 text-gray-700">
                                                            {{$work->description}}
                                                        </p>
                                                      <div class="flex justify-between">
                                                        
                                                        <div class="flex  justify-center items-center px-3 text-xs font-bold uppercase text-gray-600 rounded-2xl ">
                                                            <svg class="mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path></svg>
                                                            {{ date('d-m-Y', strtotime($work->created_at)) }}
                                                        </div>
                                                        <a type="button" href="{{route('ownwork.show',$work->id)}}" class="text-black font-medium rounded-lg text-sm px-3 py-2.5 mr-2 mb-2 text-center inline-flex items-center shadow-md  transition-transform">details</a>
                                                      </div>
                                                    </div>
                                                </div>
                                                  </div>
                                            @endforeach
                                                  
                                            <a href="{{route('ownwork.index')}}" class="inline-flex justify-center items-center p-5 text-base font-medium text-gray-500 bg-gray-50 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white">
                                                <svg aria-hidden="true" class="mr-3 w-5 h-5" viewBox="0 0 22 31" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_4151_63004)"><path d="M5.50085 30.1242C8.53625 30.1242 10.9998 27.8749 10.9998 25.1035V20.0828H5.50085C2.46546 20.0828 0.00195312 22.332 0.00195312 25.1035C0.00195312 27.8749 2.46546 30.1242 5.50085 30.1242Z" fill="#0ACF83"/><path d="M0.00195312 15.062C0.00195312 12.2905 2.46546 10.0413 5.50085 10.0413H10.9998V20.0827H5.50085C2.46546 20.0827 0.00195312 17.8334 0.00195312 15.062Z" fill="#A259FF"/><path d="M0.00195312 5.02048C0.00195312 2.24904 2.46546 -0.000244141 5.50085 -0.000244141H10.9998V10.0412H5.50085C2.46546 10.0412 0.00195312 7.79193 0.00195312 5.02048Z" fill="#F24E1E"/><path d="M11 -0.000244141H16.4989C19.5343 -0.000244141 21.9978 2.24904 21.9978 5.02048C21.9978 7.79193 19.5343 10.0412 16.4989 10.0412H11V-0.000244141Z" fill="#FF7262"/><path d="M21.9978 15.062C21.9978 17.8334 19.5343 20.0827 16.4989 20.0827C13.4635 20.0827 11 17.8334 11 15.062C11 12.2905 13.4635 10.0413 16.4989 10.0413C19.5343 10.0413 21.9978 12.2905 21.9978 15.062Z" fill="#1ABCFE"/></g><defs><clipPath id="clip0_4151_63004"><rect width="22" height="30.1244" fill="white" transform="translate(0 -0.000244141)"/></clipPath></defs></svg>                                              
                                                <span class="w-full">ดูเพิ่มเติม..</span>
                                                <svg aria-hidden="true" class="ml-3 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                            </a> 






                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="p-4 bg-white sm:p-6 dark:bg-gray-900">
              <div class="md:flex md:justify-between">
                  <div class="mb-6 md:mb-0">
                      <a href="#" class="flex items-center">
                        <img src="{{asset('images/icon/siam_icon.png')}}" class="mr-3 h-8" alt="FlowBite Logo" />
                        <h1 class="mb-4 text-xl font-extrabold text-red-600 dark:text-white md:text-md lg:text-md mt-3"><span
                        class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 ">SIAM
                        NGANCHANG</span></h1>
                      </a>
                  </div>
                  <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                      <div>
                          <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                          <ul class="text-gray-600 dark:text-gray-400">
                              <li class="mb-4">
                                  <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                              </li>
                              <li>
                                  <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                              </li>
                          </ul>
                      </div>
                      <div>
                          <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                          <ul class="text-gray-600 dark:text-gray-400">
                              <li class="mb-4">
                                  <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                              </li>
                              <li>
                                  <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                              </li>
                          </ul>
                      </div>
                      <div>
                          <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                          <ul class="text-gray-600 dark:text-gray-400">
                              <li class="mb-4">
                                  <a href="#" class="hover:underline">Privacy Policy</a>
                              </li>
                              <li>
                                  <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
              <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
              <div class="sm:flex sm:items-center sm:justify-between">
                  <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
                  </span>
                  <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                      <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                          <span class="sr-only">Facebook page</span>
                      </a>
                      <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                          <span class="sr-only">Instagram page</span>
                      </a>
                      <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                          <span class="sr-only">Twitter page</span>
                      </a>
                      <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                          <span class="sr-only">GitHub account</span>
                      </a>
                      <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" /></svg>
                          <span class="sr-only">Dribbbel account</span>
                      </a>
                  </div>
              </div>
            </footer>
        </div>
    </main>










</x-guest-layout>
