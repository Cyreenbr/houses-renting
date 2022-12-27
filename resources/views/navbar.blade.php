<nav class="main-nav">
                        <!-- *** Logo Start *** -->
                        <a href="" class="logo">
                            <img src="" width=120 height=70 align="klassy cafe html template">
                        </a>
                        <!-- *** Logo End *** -->
                        <!-- *** Menu Start *** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                           	
                        
                            <li class="submenu">
                                <a href="javascript:;">Categories</a>
                                <ul>
                                    <li><a href="#">Maison</a></li>
                                    <li><a href="#">Appartement</a></li>
                                    <li><a href="#">Studio</a></li>
                                    <li><a href="#">Villa</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li> 
                            <li>
                              @if (Route::has('login'))
                                 <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                        @auth
                                         <li style="height:50px">
                                          <x-app-layout>
 
                                          </x-app-layout>
                                         </li>
                                        @else
                                         <li>
                                          <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                                         </li>
                                        @if (Route::has('register'))
                                          <li>
                                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                          </li>
                                        @endif
                                      @endauth
                                </div>
                              @endif
                            </li>
                        </ul>        
                    
                        <!-- *** Menu End *** -->
                    </nav>