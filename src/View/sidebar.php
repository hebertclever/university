<?php
require_once __DIR__ . '/../Model/userListActions.php'
?>

<body>
    <nav id="sidebar" class="contracted-nav h-screen w-64 p-2  m-2 rounded-3xl bg-gray-900">
        <div>
            <div class="px-6 pt-8">
                <div class="flex items-center justify-between">
                    <a href="#" class="bg-blue-600 p-1.5 rounded flex items-center justify-center">
                        <svg class="icons home" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.1484 8.8047C22.072 8.73545 21.9827 8.68193 21.8856 8.6472C21.7884 8.61247 21.6854 8.5972 21.5824 8.60228C21.4794 8.60736 21.3784 8.63268 21.2852 8.67679C21.1919 8.72091 21.1083 8.78295 21.0391 8.85938C20.9698 8.93582 20.9163 9.02514 20.8816 9.12226C20.8468 9.21938 20.8316 9.32238 20.8366 9.4254C20.8417 9.52841 20.867 9.62942 20.9112 9.72265C20.9553 9.81588 21.0173 9.89951 21.0938 9.96876C21.3348 10.1797 21.5289 10.4389 21.6635 10.7296C21.798 11.0203 21.8701 11.336 21.875 11.6563V19.5781C21.8627 20.1916 21.6104 20.7757 21.1722 21.2052C20.734 21.6346 20.1448 21.8751 19.5312 21.875H5.50781C4.89425 21.8751 4.3051 21.6346 3.86689 21.2052C3.42867 20.7757 3.17633 20.1916 3.16406 19.5781V11.6563C3.16896 11.336 3.24103 11.0203 3.37561 10.7296C3.51018 10.4389 3.70427 10.1797 3.94531 9.96876L10.9766 3.71876C11.4255 3.32958 11.9996 3.11533 12.5938 3.11533C13.1879 3.11533 13.762 3.32958 14.2109 3.71876L18.5625 7.62501C18.7212 7.70611 18.9029 7.7305 19.0774 7.69414C19.2518 7.65778 19.4086 7.56286 19.5217 7.42513C19.6349 7.28739 19.6975 7.11512 19.6992 6.9369C19.7009 6.75868 19.6417 6.58523 19.5312 6.44532L15.1797 2.53907C14.4492 1.88569 13.5035 1.52448 12.5234 1.52448C11.5434 1.52448 10.5977 1.88569 9.86719 2.53907L2.875 8.78907C2.46555 9.14669 2.13679 9.58726 1.91051 10.0816C1.68423 10.5759 1.56561 11.1126 1.5625 11.6563V19.5781C1.57486 20.6128 1.99724 21.6003 2.73691 22.3238C3.47659 23.0474 4.47313 23.4479 5.50781 23.4375H19.5312C20.5592 23.4376 21.5457 23.0325 22.2769 22.31C23.0082 21.5876 23.4252 20.606 23.4375 19.5781V11.6563C23.4351 11.117 23.3191 10.5844 23.097 10.093C22.8749 9.6017 22.5517 9.16271 22.1484 8.8047Z" fill="#B7C6EB" />
                            <path d="M14.6094 9.41409C13.83 9.6596 13.1112 10.0669 12.5 10.6094C11.8889 10.0669 11.1701 9.6596 10.3906 9.41409C9.29775 9.07925 8.13164 9.06569 7.03126 9.37502C6.80572 9.43963 6.6074 9.57604 6.46641 9.76356C6.32542 9.95108 6.24944 10.1795 6.25001 10.4141V17.625C6.24936 17.7865 6.28526 17.9461 6.35504 18.0917C6.42481 18.2374 6.52665 18.3654 6.65291 18.4661C6.77917 18.5668 6.92659 18.6376 7.08412 18.6733C7.24164 18.7089 7.40519 18.7084 7.56251 18.6719C8.33639 18.485 9.14654 18.512 9.90626 18.75C10.3458 18.8917 10.7599 19.1027 11.1328 19.375C11.5241 19.6643 11.9978 19.8204 12.4844 19.8204C12.971 19.8204 13.4447 19.6643 13.8359 19.375C14.2137 19.1012 14.6331 18.8902 15.0781 18.75C15.8379 18.512 16.648 18.485 17.4219 18.6719C17.5784 18.7094 17.7415 18.7107 17.8986 18.6755C18.0557 18.6402 18.2026 18.5695 18.3281 18.4688C18.4636 18.3658 18.5725 18.2319 18.6459 18.0784C18.7192 17.9249 18.7549 17.7561 18.75 17.586V10.375C18.7423 10.1471 18.6625 9.92759 18.5221 9.74791C18.3817 9.56823 18.188 9.43768 17.9688 9.37502C16.8682 9.06744 15.7025 9.081 14.6094 9.41409ZM17.1875 17C16.322 16.8835 15.4413 16.9609 14.6094 17.2266C14.0101 17.4155 13.4455 17.7004 12.9375 18.0703C12.8115 18.1654 12.6579 18.2168 12.5 18.2168C12.3421 18.2168 12.1886 18.1654 12.0625 18.0703C11.5546 17.7004 10.9899 17.4155 10.3906 17.2266C9.81074 17.0367 9.20396 16.9417 8.59376 16.9453C8.33245 16.947 8.0715 16.9652 7.81251 17V10.75C8.5159 10.6209 9.24024 10.6665 9.92188 10.8828C10.6075 11.1092 11.2254 11.5041 11.7188 12.0313V15.625C11.7188 15.8322 11.8011 16.0309 11.9476 16.1775C12.0941 16.324 12.2928 16.4063 12.5 16.4063C12.7072 16.4063 12.9059 16.324 13.0524 16.1775C13.1989 16.0309 13.2813 15.8322 13.2813 15.625V12.0313C13.7808 11.524 14.3981 11.1482 15.0781 10.9375C15.7598 10.7212 16.4841 10.6756 17.1875 10.8047V17Z" fill="#B7C6EB" />
                        </svg>
                    </a>
                    <button class="flex items-center justify-center p-0.5 rounded bg-gray-800" href="#">
                        <svg id="toggleArrow" class="icons arrow-left" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.29 12L14.83 8.46001C15.0163 8.27265 15.1208 8.0192 15.1208 7.75501C15.1208 7.49082 15.0163 7.23737 14.83 7.05001C14.737 6.95628 14.6264 6.88189 14.5046 6.83112C14.3827 6.78035 14.252 6.75421 14.12 6.75421C13.988 6.75421 13.8573 6.78035 13.7354 6.83112C13.6136 6.88189 13.503 6.95628 13.41 7.05001L9.17 11.29C9.07628 11.383 9.00188 11.4936 8.95111 11.6154C8.90035 11.7373 8.87421 11.868 8.87421 12C8.87421 12.132 8.90035 12.2627 8.95111 12.3846C9.00188 12.5064 9.07628 12.617 9.17 12.71L13.41 17C13.5034 17.0927 13.6143 17.166 13.7361 17.2158C13.8579 17.2655 13.9884 17.2908 14.12 17.29C14.2516 17.2908 14.3821 17.2655 14.5039 17.2158C14.6257 17.166 14.7366 17.0927 14.83 17C15.0163 16.8126 15.1208 16.5592 15.1208 16.295C15.1208 16.0308 15.0163 15.7774 14.83 15.59L11.29 12Z" fill="#B7C6EB" />
                        </svg>
                    </button>
                </div>

            </div>
            <div>
                <div class="px-6 pt-4 sidebar-hideable">
                    <div class="relative">
                        <div class="absolute inset-y-5 left-40 flex items-center pl-2 pointer-events-none">
                            <svg class="sidebar-hideable" width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.6575 6.57799C11.6575 9.36732 9.39617 11.6273 6.60817 11.6273C3.81884 11.6273 1.55884 9.36732 1.55884 6.57799C1.55884 3.78999 3.81884 1.52999 6.60817 1.52999C9.39617 1.52999 11.6575 3.78999 11.6575 6.57799Z" stroke="#B7C6EB" stroke-width="1.20533" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M10.1289 10.1887L12.3489 12.41" stroke="#B7C6EB" stroke-width="1.20533" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <input type="text" class=" sidebar-hideable w-full rounded px-4 py-2.5 text-sm font-light bg-gray-800 text-gray-400 placeholder-gray-500" placeholder="search" />
                </div>
            </div>
            <div class="px-6 pt-4">
                <ul class="flex flex-col space-y-2">
                    <li class="relative text-gray-500 hover:text-white focus-within:text-white">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-2  pointer-events-none">
                            <svg class="icons  " width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 13H3C2.73478 13 2.48043 13.1054 2.29289 13.2929C2.10536 13.4804 2 13.7348 2 14V21C2 21.2652 2.10536 21.5196 2.29289 21.7071C2.48043 21.8946 2.73478 22 3 22H10C10.2652 22 10.5196 21.8946 10.7071 21.7071C10.8946 21.5196 11 21.2652 11 21V14C11 13.7348 10.8946 13.4804 10.7071 13.2929C10.5196 13.1054 10.2652 13 10 13ZM9 20H4V15H9V20ZM21 2H14C13.7348 2 13.4804 2.10536 13.2929 2.29289C13.1054 2.48043 13 2.73478 13 3V10C13 10.2652 13.1054 10.5196 13.2929 10.7071C13.4804 10.8946 13.7348 11 14 11H21C21.2652 11 21.5196 10.8946 21.7071 10.7071C21.8946 10.5196 22 10.2652 22 10V3C22 2.73478 21.8946 2.48043 21.7071 2.29289C21.5196 2.10536 21.2652 2 21 2ZM20 9H15V4H20V9ZM21 13H14C13.7348 13 13.4804 13.1054 13.2929 13.2929C13.1054 13.4804 13 13.7348 13 14V21C13 21.2652 13.1054 21.5196 13.2929 21.7071C13.4804 21.8946 13.7348 22 14 22H21C21.2652 22 21.5196 21.8946 21.7071 21.7071C21.8946 21.5196 22 21.2652 22 21V14C22 13.7348 21.8946 13.4804 21.7071 13.2929C21.5196 13.1054 21.2652 13 21 13ZM20 20H15V15H20V20ZM10 2H3C2.73478 2 2.48043 2.10536 2.29289 2.29289C2.10536 2.48043 2 2.73478 2 3V10C2 10.2652 2.10536 10.5196 2.29289 10.7071C2.48043 10.8946 2.73478 11 3 11H10C10.2652 11 10.5196 10.8946 10.7071 10.7071C10.8946 10.5196 11 10.2652 11 10V3C11 2.73478 10.8946 2.48043 10.7071 2.29289C10.5196 2.10536 10.2652 2 10 2ZM9 9H4V4H9V9Z" fill="#B7C6EB" />
                            </svg>
                        </div>
                        <a href="/index.php" class="inline-block w-full py-2 pl-11 pr-4 text-md rounded hover:bg-gray-800 focus:outline-none focus:ring-1 focus:ring-gray-500 focus:bg-gray-800 ">
                            <p class="sidebar-hideable">Dashboard</p>
                        </a>
                    </li>


                    <li class="relative text-gray-500 hover:text-white focus-within:text-white">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-2  pointer-events-none">
                            <svg class="icons" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.63 3.65C19.5138 3.55602 19.3781 3.48927 19.2327 3.45466C19.0873 3.42005 18.9361 3.41846 18.79 3.45C17.7214 3.67394 16.6183 3.6768 15.5486 3.45838C14.4789 3.23997 13.4652 2.80491 12.57 2.18C12.4026 2.06387 12.2037 2.00164 12 2.00164C11.7963 2.00164 11.5974 2.06387 11.43 2.18C10.5348 2.80491 9.52108 3.23997 8.45137 3.45838C7.38166 3.6768 6.27857 3.67394 5.21001 3.45C5.06394 3.41846 4.91267 3.42005 4.76731 3.45466C4.62194 3.48927 4.48618 3.55602 4.37001 3.65C4.25399 3.74412 4.16053 3.86304 4.0965 3.99802C4.03247 4.13299 3.9995 4.2806 4.00001 4.43V11.88C3.99912 13.3137 4.34078 14.727 4.99654 16.002C5.6523 17.277 6.60319 18.3768 7.77001 19.21L11.42 21.81C11.5894 21.9306 11.7921 21.9954 12 21.9954C12.2079 21.9954 12.4106 21.9306 12.58 21.81L16.23 19.21C17.3968 18.3768 18.3477 17.277 19.0035 16.002C19.6592 14.727 20.0009 13.3137 20 11.88V4.43C20.0005 4.2806 19.9675 4.13299 19.9035 3.99802C19.8395 3.86304 19.746 3.74412 19.63 3.65ZM18 11.88C18.0008 12.9948 17.7353 14.0936 17.2257 15.085C16.716 16.0765 15.977 16.9318 15.07 17.58L12 19.77L8.93001 17.58C8.02304 16.9318 7.28399 16.0765 6.77435 15.085C6.26472 14.0936 5.99924 12.9948 6.00001 11.88V5.58C8.09643 5.75943 10.196 5.27302 12 4.19C13.804 5.27302 15.9036 5.75943 18 5.58V11.88ZM13.54 9.59L10.85 12.29L9.96001 11.39C9.7717 11.2017 9.51631 11.0959 9.25001 11.0959C8.9837 11.0959 8.72831 11.2017 8.54001 11.39C8.3517 11.5783 8.24591 11.8337 8.24591 12.1C8.24591 12.3663 8.3517 12.6217 8.54001 12.81L10.14 14.41C10.233 14.5037 10.3436 14.5781 10.4654 14.6289C10.5873 14.6797 10.718 14.7058 10.85 14.7058C10.982 14.7058 11.1127 14.6797 11.2346 14.6289C11.3564 14.5781 11.467 14.5037 11.56 14.41L15 11C15.1883 10.8117 15.2941 10.5563 15.2941 10.29C15.2941 10.0237 15.1883 9.7683 15 9.58C14.8117 9.3917 14.5563 9.28591 14.29 9.28591C14.0237 9.28591 13.7683 9.3917 13.58 9.58L13.54 9.59Z" fill="#B7C6EB" />
                            </svg>
                        </div>
                        <a href="/src/view/users_list.php?user_type=1" class="inline-block w-full py-2 pl-11 pr-4 text-md rounded hover:bg-gray-800 focus:outline-none focus:ring-1 focus:ring-gray-500 focus:bg-gray-800">
                            <p class="sidebar-hideable">Admin Manager</p>
                        </a>

                    </li>
                    <li class="relative text-gray-500 hover:text-white focus-within:text-white">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-2  pointer-events-none">
                            <svg class="icons" width="25" height="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.2188 2.34375H5.34375C4.75593 2.34581 4.19278 2.58023 3.77713 2.99588C3.36148 3.41153 3.12706 3.97468 3.125 4.5625V8.59375C3.125 8.80095 3.20731 8.99966 3.35382 9.14618C3.50034 9.29269 3.69905 9.375 3.90625 9.375C4.11345 9.375 4.31216 9.29269 4.45868 9.14618C4.60519 8.99966 4.6875 8.80095 4.6875 8.59375V4.5625C4.68953 4.38908 4.75932 4.22334 4.88195 4.1007C5.00459 3.97807 5.17033 3.90828 5.34375 3.90625H21.2188C21.3922 3.90828 21.5579 3.97807 21.6805 4.1007C21.8032 4.22334 21.873 4.38908 21.875 4.5625V15.75C21.873 15.9234 21.8032 16.0892 21.6805 16.2118C21.5579 16.3344 21.3922 16.4042 21.2188 16.4062H20.3125V15.6953C20.3104 15.2629 20.1378 14.8488 19.832 14.543C19.5262 14.2372 19.1121 14.0646 18.6797 14.0625H15.6953C15.2629 14.0646 14.8488 14.2372 14.543 14.543C14.2372 14.8488 14.0646 15.2629 14.0625 15.6953V16.4062H12.5C12.2928 16.4062 12.0941 16.4886 11.9476 16.6351C11.8011 16.7816 11.7188 16.9803 11.7188 17.1875C11.7188 17.3947 11.8011 17.5934 11.9476 17.7399C12.0941 17.8864 12.2928 17.9688 12.5 17.9688H21.2188C21.8066 17.9667 22.3697 17.7323 22.7854 17.3166C23.201 16.901 23.4354 16.3378 23.4375 15.75V4.5625C23.4354 3.97468 23.201 3.41153 22.7854 2.99588C22.3697 2.58023 21.8066 2.34581 21.2188 2.34375ZM15.625 16.4062V15.6953C15.625 15.6767 15.6324 15.6588 15.6456 15.6456C15.6588 15.6324 15.6767 15.625 15.6953 15.625H18.6797C18.6983 15.625 18.7162 15.6324 18.7294 15.6456C18.7426 15.6588 18.75 15.6767 18.75 15.6953V16.4062H15.625Z" fill="#B7C6EB" />
                                <path d="M9.375 12.5C9.375 11.8819 9.19172 11.2777 8.84834 10.7638C8.50496 10.2499 8.01691 9.8494 7.44589 9.61288C6.87487 9.37635 6.24654 9.31447 5.64034 9.43505C5.03415 9.55563 4.47733 9.85325 4.04029 10.2903C3.60325 10.7273 3.30563 11.2842 3.18505 11.8903C3.06447 12.4965 3.12635 13.1249 3.36288 13.6959C3.5994 14.2669 3.99994 14.755 4.51384 15.0983C5.02775 15.4417 5.63194 15.625 6.25 15.625C7.0788 15.625 7.87366 15.2958 8.45971 14.7097C9.04576 14.1237 9.375 13.3288 9.375 12.5ZM4.6875 12.5C4.6875 12.191 4.77914 11.8889 4.95083 11.6319C5.12252 11.375 5.36655 11.1747 5.65206 11.0564C5.93757 10.9382 6.25173 10.9072 6.55483 10.9675C6.85793 11.0278 7.13634 11.1766 7.35486 11.3951C7.57338 11.6137 7.72219 11.8921 7.78248 12.1952C7.84277 12.4983 7.81183 12.8124 7.69356 13.0979C7.5753 13.3835 7.37503 13.6275 7.11808 13.7992C6.86113 13.9709 6.55904 14.0625 6.25 14.0625C5.8356 14.0625 5.43817 13.8979 5.14515 13.6049C4.85212 13.3118 4.6875 12.9144 4.6875 12.5Z" fill="#B7C6EB" />
                                <path d="M7.8125 16.4062H4.6875C3.8587 16.4062 3.06384 16.7355 2.47779 17.3215C1.89174 17.9076 1.5625 18.7024 1.5625 19.5312V21.0938C1.5625 21.301 1.64481 21.4997 1.79132 21.6462C1.93784 21.7927 2.13655 21.875 2.34375 21.875H10.1562C10.3635 21.875 10.5622 21.7927 10.7087 21.6462C10.8552 21.4997 10.9375 21.301 10.9375 21.0938V19.5312C10.9375 18.7024 10.6083 17.9076 10.0222 17.3215C9.43616 16.7355 8.6413 16.4062 7.8125 16.4062ZM9.375 20.3125H3.125V19.5312C3.125 19.1168 3.28962 18.7194 3.58265 18.4264C3.87567 18.1334 4.2731 17.9688 4.6875 17.9688H7.8125C8.2269 17.9688 8.62433 18.1334 8.91735 18.4264C9.21038 18.7194 9.375 19.1168 9.375 19.5312V20.3125Z" fill="#B7C6EB" />
                            </svg>
                        </div>
                        <a href="/src/view/users_list.php?user_type=2" class="inline-block w-full py-2 pl-11 pr-4 text-md rounded hover:bg-gray-800 focus:outline-none focus:ring-1 focus:ring-gray-500 focus:bg-gray-800">
                            <p class="sidebar-hideable">Teachers</p>
                        </a>

                    </li>


                    <li class="relative text-gray-500 hover:text-white focus-within:text-white">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-2  pointer-events-none">
                            <svg class="icons" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.875 21.875H13.2812V19.2344L14.8047 18.4532C15.4675 18.1258 16.1983 17.9598 16.9375 17.9688C17.4864 17.9675 18.0216 18.1409 18.4654 18.4639C18.9092 18.787 19.2387 19.2429 19.4062 19.7657C19.4684 19.9635 19.6066 20.1286 19.7905 20.2246C19.9744 20.3205 20.1888 20.3395 20.3867 20.2774C20.5846 20.2152 20.7497 20.077 20.8456 19.8931C20.9416 19.7093 20.9606 19.4948 20.8984 19.2969C20.6322 18.456 20.1043 17.7222 19.3919 17.2022C18.6794 16.6823 17.8195 16.4034 16.9375 16.4063C16.692 16.4061 16.4467 16.4217 16.2031 16.4532L15.625 14.75C16.3477 14.2891 16.9417 13.6525 17.3516 12.8997C17.7615 12.1469 17.9738 11.3025 17.9688 10.4453V7.81253C17.9762 7.74503 17.9762 7.67691 17.9688 7.60941L19.5312 6.77347V9.37503C19.5312 9.58223 19.6136 9.78095 19.7601 9.92746C19.9066 10.074 20.1053 10.1563 20.3125 10.1563C20.5197 10.1563 20.7184 10.074 20.8649 9.92746C21.0114 9.78095 21.0938 9.58223 21.0938 9.37503V5.46878C21.0876 5.3858 21.0691 5.30419 21.0391 5.2266C21.0215 5.18088 21.0006 5.13649 20.9766 5.09378L20.9297 5.02347C20.8332 4.89516 20.6995 4.79968 20.5469 4.75003L13.3672 1.73441C13.0928 1.61838 12.7979 1.55859 12.5 1.55859C12.2021 1.55859 11.9072 1.61838 11.6328 1.73441L5.03906 4.49222C4.84512 4.57556 4.67876 4.71215 4.55926 4.88615C4.43975 5.06015 4.37198 5.26444 4.36381 5.47537C4.35563 5.6863 4.40738 5.89524 4.51306 6.07796C4.61874 6.26069 4.77403 6.40974 4.96094 6.50785L11.4609 9.89847C11.7812 10.0675 12.1379 10.1558 12.5 10.1558C12.8621 10.1558 13.2188 10.0675 13.5391 9.89847L16.4062 8.40628V10.4453C16.4147 11.1779 16.193 11.8946 15.7725 12.4944C15.3521 13.0943 14.754 13.5471 14.0625 13.7891C13.5577 13.9557 13.0314 14.0478 12.5 14.0625C11.9211 14.0643 11.3467 13.961 10.8047 13.7578C10.1444 13.4987 9.57891 13.0442 9.18383 12.455C8.78875 11.8659 8.58288 11.1702 8.59375 10.461C8.59375 10.2538 8.51144 10.0551 8.36493 9.90854C8.21841 9.76203 8.0197 9.67972 7.8125 9.67972C7.6053 9.67972 7.40659 9.76203 7.26007 9.90854C7.11356 10.0551 7.03125 10.2538 7.03125 10.461C7.0291 11.3176 7.24269 12.1609 7.65229 12.9132C8.0619 13.6655 8.65435 14.3026 9.375 14.7657L8.8125 16.4532C8.56897 16.4217 8.32367 16.4061 8.07812 16.4063C7.53129 16.4053 6.98961 16.5119 6.48401 16.7203C5.97841 16.9286 5.51879 17.2344 5.1314 17.6204C4.744 18.0063 4.43642 18.4648 4.22621 18.9696C4.016 19.4744 3.90727 20.0157 3.90625 20.5625V21.875H3.125C2.9178 21.875 2.71909 21.9573 2.57257 22.1039C2.42606 22.2504 2.34375 22.4491 2.34375 22.6563C2.34375 22.8635 2.42606 23.0622 2.57257 23.2087C2.71909 23.3552 2.9178 23.4375 3.125 23.4375H21.875C22.0822 23.4375 22.2809 23.3552 22.4274 23.2087C22.5739 23.0622 22.6562 22.8635 22.6562 22.6563C22.6562 22.4491 22.5739 22.2504 22.4274 22.1039C22.2809 21.9573 22.0822 21.875 21.875 21.875ZM12.8203 8.51566C12.7222 8.56969 12.612 8.59802 12.5 8.59802C12.388 8.59802 12.2778 8.56969 12.1797 8.51566L6.52344 5.56253L12.2344 3.21878C12.4045 3.14847 12.5955 3.14847 12.7656 3.21878L18.4766 5.6016L12.8203 8.51566ZM10.7969 15.3985C11.3522 15.5481 11.9248 15.6243 12.5 15.625C13.0729 15.6137 13.6422 15.5323 14.1953 15.3828L14.6797 16.8282C14.4823 16.9001 14.2892 16.9836 14.1016 17.0782L12.5 17.8594L10.8984 17.0782C10.7108 16.9836 10.5177 16.9001 10.3203 16.8282L10.7969 15.3985ZM5.46875 20.5625C5.46875 19.8746 5.74202 19.2149 6.22844 18.7285C6.71486 18.2421 7.37459 17.9688 8.0625 17.9688C8.80358 17.9671 9.53451 18.1411 10.1953 18.4766L11.7188 19.2578V21.875H5.46875V20.5625Z" fill="#B7C6EB" />
                            </svg>
                        </div>
                        <a href="/src/view/users_list.php?user_type=3" class="inline-block w-full py-2 pl-11 pr-4 text-md rounded hover:bg-gray-800 focus:outline-none focus:ring-1 focus:ring-gray-500 focus:bg-gray-800">
                            <p class="sidebar-hideable">Students</p>
                        </a>

                    </li>



                    <li class="relative text-gray-500 hover:text-white focus-within:text-white">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-2  pointer-events-none">
                            <svg class="icons" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.2188 1.5625H3.78125C3.19343 1.56456 2.63028 1.79898 2.21463 2.21463C1.79898 2.63028 1.56456 3.19343 1.5625 3.78125V14.9688C1.56456 15.5566 1.79898 16.1197 2.21463 16.5354C2.63028 16.951 3.19343 17.1854 3.78125 17.1875H8.59375C8.80095 17.1875 8.99966 17.1052 9.14618 16.9587C9.29269 16.8122 9.375 16.6135 9.375 16.4062C9.375 16.199 9.29269 16.0003 9.14618 15.8538C8.99966 15.7073 8.80095 15.625 8.59375 15.625H3.78125C3.60783 15.623 3.44209 15.5532 3.31945 15.4305C3.19682 15.3079 3.12703 15.1422 3.125 14.9688V3.78125C3.12703 3.60783 3.19682 3.44209 3.31945 3.31945C3.44209 3.19682 3.60783 3.12703 3.78125 3.125H21.2188C21.3922 3.12703 21.5579 3.19682 21.6805 3.31945C21.8032 3.44209 21.873 3.60783 21.875 3.78125V14.9688C21.873 15.1422 21.8032 15.3079 21.6805 15.4305C21.5579 15.5532 21.3922 15.623 21.2188 15.625H20.3125V14.9141C20.3104 14.4816 20.1378 14.0675 19.832 13.7618C19.5262 13.456 19.1121 13.2833 18.6797 13.2812H15.6953C15.2629 13.2833 14.8488 13.456 14.543 13.7618C14.2372 14.0675 14.0646 14.4816 14.0625 14.9141V15.625H12.5C12.2928 15.625 12.0941 15.7073 11.9476 15.8538C11.8011 16.0003 11.7188 16.199 11.7188 16.4062V18.8906C11.1975 19.0749 10.7582 19.4376 10.4784 19.9144C10.1987 20.3913 10.0965 20.9517 10.19 21.4967C10.2835 22.0416 10.5666 22.5359 10.9893 22.8923C11.412 23.2486 11.9471 23.4441 12.5 23.4441C13.0529 23.4441 13.588 23.2486 14.0107 22.8923C14.4334 22.5359 14.7165 22.0416 14.81 21.4967C14.9035 20.9517 14.8013 20.3913 14.5216 19.9144C14.2418 19.4376 13.8025 19.0749 13.2812 18.8906V17.1875H21.2188C21.8066 17.1854 22.3697 16.951 22.7854 16.5354C23.201 16.1197 23.4354 15.5566 23.4375 14.9688V3.78125C23.4354 3.19343 23.201 2.63028 22.7854 2.21463C22.3697 1.79898 21.8066 1.56456 21.2188 1.5625ZM12.5 21.875C12.3455 21.875 12.1944 21.8292 12.066 21.7433C11.9375 21.6575 11.8373 21.5355 11.7782 21.3927C11.7191 21.25 11.7036 21.0929 11.7338 20.9413C11.7639 20.7898 11.8383 20.6506 11.9476 20.5413C12.0568 20.4321 12.196 20.3577 12.3476 20.3275C12.4991 20.2974 12.6562 20.3128 12.799 20.372C12.9417 20.4311 13.0637 20.5312 13.1496 20.6597C13.2354 20.7882 13.2812 20.9392 13.2812 21.0938C13.2812 21.301 13.1989 21.4997 13.0524 21.6462C12.9059 21.7927 12.7072 21.875 12.5 21.875ZM15.625 15.625V14.9141C15.625 14.8954 15.6324 14.8775 15.6456 14.8643C15.6588 14.8512 15.6767 14.8438 15.6953 14.8438H18.6797C18.6983 14.8438 18.7162 14.8512 18.7294 14.8643C18.7426 14.8775 18.75 14.8954 18.75 14.9141V15.625H15.625Z" fill="#B7C6EB" />
                            </svg>
                        </div>
                        <a href="/src/view/courses_list.php" class="inline-block w-full py-2 pl-11 pr-4 text-md rounded hover:bg-gray-800 focus:outline-none focus:ring-1 focus:ring-gray-500 focus:bg-gray-800 ">
                            <p class="sidebar-hideable">Classes</p>
                        </a>
                    </li>

                    <li class="relative text-gray-500 hover:text-white focus-within:text-white">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-2  pointer-events-none">
                            <svg class="icons" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.6562 3.125H3.34375C3.10983 3.125 2.87821 3.17107 2.6621 3.26059C2.44598 3.35011 2.24962 3.48131 2.08422 3.64672C1.75017 3.98077 1.5625 4.43383 1.5625 4.90625V15.4062C1.5625 15.8787 1.75017 16.3317 2.08422 16.6658C2.24962 16.8312 2.44598 16.9624 2.6621 17.0519C2.87821 17.1414 3.10983 17.1875 3.34375 17.1875H10.9375C11.1447 17.1875 11.3434 17.1052 11.4899 16.9587C11.6364 16.8122 11.7188 16.6135 11.7188 16.4062C11.7188 16.199 11.6364 16.0003 11.4899 15.8538C11.3434 15.7073 11.1447 15.625 10.9375 15.625H3.34375C3.31473 15.6261 3.28579 15.6212 3.25876 15.6106C3.23172 15.6 3.20717 15.5839 3.18663 15.5634C3.1661 15.5428 3.15002 15.5183 3.13942 15.4912C3.12881 15.4642 3.1239 15.4353 3.125 15.4062V4.90625C3.1239 4.87723 3.12881 4.84829 3.13942 4.82126C3.15002 4.79422 3.1661 4.76967 3.18663 4.74913C3.20717 4.7286 3.23172 4.71252 3.25876 4.70192C3.28579 4.69131 3.31473 4.6864 3.34375 4.6875H21.6562C21.6853 4.6864 21.7142 4.69131 21.7412 4.70192C21.7683 4.71252 21.7928 4.7286 21.8134 4.74913C21.8339 4.76967 21.85 4.79422 21.8606 4.82126C21.8712 4.84829 21.8761 4.87723 21.875 4.90625V15.4062C21.8761 15.4353 21.8712 15.4642 21.8606 15.4912C21.85 15.5183 21.8339 15.5428 21.8134 15.5634C21.7928 15.5839 21.7683 15.6 21.7412 15.6106C21.7142 15.6212 21.6853 15.6261 21.6562 15.625C21.449 15.625 21.2503 15.7073 21.1038 15.8538C20.9573 16.0003 20.875 16.199 20.875 16.4062C20.875 16.6135 20.9573 16.8122 21.1038 16.9587C21.2503 17.1052 21.449 17.1875 21.6562 17.1875C22.1287 17.1875 22.5817 16.9998 22.9158 16.6658C23.2498 16.3317 23.4375 15.8787 23.4375 15.4062V4.90625C23.4375 4.43383 23.2498 3.98077 22.9158 3.64672C22.5817 3.31267 22.1287 3.125 21.6562 3.125Z" fill="#B7C6EB" />
                                <path d="M16.4062 7.8125C15.3702 7.8125 14.3767 8.22405 13.6441 8.95661C12.9115 9.68918 12.5 10.6827 12.5 11.7187C12.496 12.5646 12.7705 13.3882 13.2812 14.0625V21.0937C13.2816 21.2351 13.3203 21.3737 13.3932 21.4947C13.4662 21.6158 13.5705 21.7148 13.6953 21.7812C13.8175 21.844 13.954 21.8734 14.0912 21.8665C14.2283 21.8597 14.3612 21.8168 14.4765 21.7422L16.4062 20.4688L18.3203 21.7422C18.4378 21.8196 18.574 21.8638 18.7146 21.8702C18.8551 21.8765 18.9948 21.8449 19.1188 21.7784C19.2428 21.712 19.3466 21.6134 19.4192 21.4928C19.4918 21.3723 19.5305 21.2344 19.5312 21.0937V14.0625C20.0419 13.3882 20.3165 12.5646 20.3125 11.7187C20.3125 10.6827 19.9009 9.68918 19.1684 8.95661C18.4358 8.22405 17.4422 7.8125 16.4062 7.8125ZM16.4062 9.375C16.8698 9.375 17.3229 9.51246 17.7083 9.76999C18.0938 10.0275 18.3942 10.3936 18.5716 10.8218C18.749 11.2501 18.7954 11.7213 18.7049 12.176C18.6145 12.6306 18.3913 13.0483 18.0635 13.376C17.7357 13.7038 17.3181 13.927 16.8635 14.0175C16.4088 14.1079 15.9376 14.0615 15.5093 13.8841C15.0811 13.7067 14.715 13.4063 14.4575 13.0209C14.1999 12.6354 14.0625 12.1823 14.0625 11.7187C14.0625 11.0971 14.3094 10.501 14.749 10.0615C15.1885 9.62193 15.7846 9.375 16.4062 9.375ZM16.8359 18.8828C16.7084 18.7988 16.559 18.754 16.4062 18.754C16.2535 18.754 16.1041 18.7988 15.9765 18.8828L14.8437 19.6641V15.2969C15.3366 15.512 15.8685 15.623 16.4062 15.623C16.944 15.623 17.4759 15.512 17.9687 15.2969V19.6328L16.8359 18.8828Z" fill="#B7C6EB" />
                                <path d="M10.1562 6.25H5.46875C5.26155 6.25 5.06284 6.33231 4.91632 6.47882C4.76981 6.62534 4.6875 6.82405 4.6875 7.03125C4.6875 7.23845 4.76981 7.43716 4.91632 7.58368C5.06284 7.73019 5.26155 7.8125 5.46875 7.8125H10.1562C10.3635 7.8125 10.5622 7.73019 10.7087 7.58368C10.8552 7.43716 10.9375 7.23845 10.9375 7.03125C10.9375 6.82405 10.8552 6.62534 10.7087 6.47882C10.5622 6.33231 10.3635 6.25 10.1562 6.25Z" fill="#B7C6EB" />
                                <path d="M10.1562 9.375H5.46875C5.26155 9.375 5.06284 9.45731 4.91632 9.60382C4.76981 9.75034 4.6875 9.94905 4.6875 10.1562C4.6875 10.3635 4.76981 10.5622 4.91632 10.7087C5.06284 10.8552 5.26155 10.9375 5.46875 10.9375H10.1562C10.3635 10.9375 10.5622 10.8552 10.7087 10.7087C10.8552 10.5622 10.9375 10.3635 10.9375 10.1562C10.9375 9.94905 10.8552 9.75034 10.7087 9.60382C10.5622 9.45731 10.3635 9.375 10.1562 9.375Z" fill="#B7C6EB" />
                            </svg>
                        </div>
                        <a href="#" class="inline-block w-full py-2 pl-11 pr-4 text-md rounded hover:bg-gray-800 focus:outline-none focus:ring-1 focus:ring-gray-500 focus:bg-gray-800 ">
                            <p class="sidebar-hideable">View Your Grades</p>
                        </a>
                    </li>
                    <li class="relative text-gray-500 hover:text-white focus-within:text-white">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-2  pointer-events-none">
                            <svg class="icons" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M23.0547 17.5469C22.7941 17.1856 22.4327 16.9092 22.0159 16.7522C21.599 16.5952 21.1451 16.5645 20.7109 16.6641L15.7578 17.8437C15.4616 17.9064 15.1556 17.9064 14.8594 17.8437L12.4688 17.3828C12.3476 17.3666 12.2361 17.3084 12.1533 17.2186C12.0705 17.1287 12.0218 17.0127 12.0156 16.8906C12.0196 16.8198 12.0375 16.7504 12.0684 16.6866C12.0992 16.6227 12.1424 16.5655 12.1954 16.5183C12.2483 16.4711 12.3101 16.4349 12.3771 16.4116C12.4442 16.3884 12.5151 16.3786 12.5859 16.3828H13.2812C13.7993 16.3828 14.296 16.177 14.6623 15.8108C15.0286 15.4445 15.2344 14.9477 15.2344 14.4297C15.2344 13.9117 15.0286 13.4149 14.6623 13.0486C14.296 12.6823 13.7993 12.4766 13.2812 12.4766H11.0234C10.5201 12.4768 10.0196 12.5532 9.53906 12.7031L6.19531 13.7891C6.13991 13.6408 6.04077 13.5128 5.91103 13.4221C5.78128 13.3315 5.62704 13.2823 5.46875 13.2812H2.34375C2.13655 13.2812 1.93784 13.3636 1.79132 13.5101C1.64481 13.6566 1.5625 13.8553 1.5625 14.0625V22.6562C1.5625 22.8634 1.64481 23.0622 1.79132 23.2087C1.93784 23.3552 2.13655 23.4375 2.34375 23.4375H5.46875C5.66189 23.4387 5.84861 23.3683 5.99289 23.2399C6.13716 23.1114 6.22876 22.9342 6.25 22.7422L10.7031 23.2109C11.1026 23.2549 11.5043 23.2758 11.9062 23.2734C12.9642 23.2716 14.0164 23.1191 15.0312 22.8203C15.2278 22.7654 15.3951 22.6357 15.4973 22.4591C15.5995 22.2824 15.6285 22.0728 15.5781 21.875C15.5201 21.6761 15.3855 21.5084 15.2038 21.4087C15.0221 21.3091 14.8083 21.2857 14.6094 21.3437C13.3917 21.705 12.114 21.8192 10.8516 21.6797L6.25 21.1719V15.4141L10.0156 14.2188C10.3416 14.1156 10.6815 14.0629 11.0234 14.0625H13.2812C13.3849 14.0625 13.4842 14.1037 13.5575 14.1769C13.6307 14.2502 13.6719 14.3495 13.6719 14.4531C13.6719 14.5567 13.6307 14.6561 13.5575 14.7293C13.4842 14.8026 13.3849 14.8437 13.2812 14.8437H12.5859C12.0527 14.8089 11.5268 14.9825 11.119 15.3277C10.7111 15.673 10.4532 16.1631 10.3995 16.6947C10.3459 17.2264 10.5006 17.7581 10.8312 18.1779C11.1618 18.5977 11.6425 18.8728 12.1719 18.9453L14.5625 19.3984C15.0776 19.5079 15.6099 19.5079 16.125 19.3984L21.0781 18.2109C21.2119 18.1783 21.3524 18.1861 21.4818 18.2334C21.6111 18.2807 21.7235 18.3653 21.8047 18.4766C21.8551 18.5469 21.8877 18.6284 21.9 18.7141C21.9122 18.7997 21.9036 18.8871 21.875 18.9687C21.8409 19.0641 21.7839 19.1496 21.709 19.2178C21.634 19.2859 21.5435 19.3345 21.4453 19.3594L17.9688 20.3125C17.8662 20.3269 17.7674 20.3613 17.6781 20.4138C17.5888 20.4664 17.5107 20.536 17.4484 20.6187C17.386 20.7014 17.3405 20.7955 17.3145 20.8958C17.2885 20.9961 17.2825 21.1005 17.2969 21.2031C17.3112 21.3057 17.3457 21.4045 17.3982 21.4938C17.4507 21.5831 17.5203 21.6611 17.603 21.7235C17.6857 21.7859 17.7799 21.8314 17.8802 21.8574C17.9805 21.8834 18.0849 21.8894 18.1875 21.875C18.26 21.8864 18.3338 21.8864 18.4062 21.875L21.875 20.8203C22.2091 20.7239 22.5157 20.5498 22.7696 20.3121C23.0236 20.0745 23.2176 19.7801 23.3359 19.4531C23.4445 19.136 23.4756 18.7975 23.4267 18.4659C23.3777 18.1343 23.2502 17.8192 23.0547 17.5469ZM4.6875 21.875H3.125V14.8437H4.6875V21.875Z" fill="#B7C6EB" />
                                <path d="M4.46095 5.46875L7.03126 6.19531L6.31251 8.34375C6.27906 8.44492 6.26665 8.55186 6.27605 8.658C6.28546 8.76414 6.31648 8.86723 6.3672 8.96094C6.41448 9.05523 6.48152 9.13823 6.56376 9.20429C6.64599 9.27034 6.74149 9.31791 6.84376 9.34375L12.3125 10.9063C12.45 10.948 12.5969 10.948 12.7344 10.9063L18.2031 9.34375C18.4062 9.2847 18.5775 9.1474 18.6793 8.96206C18.7811 8.77673 18.8052 8.55853 18.7461 8.35547C18.6871 8.15241 18.5498 7.98113 18.3644 7.87931C18.1791 7.77748 17.9609 7.75345 17.7578 7.8125L12.5 9.375L8.03126 8.10156L8.50001 6.67969L12.2734 7.8125C12.4216 7.85422 12.5784 7.85422 12.7266 7.8125L19.5313 5.73438V9.375C19.5313 9.5822 19.6136 9.78092 19.7601 9.92743C19.9066 10.0739 20.1053 10.1563 20.3125 10.1563C20.5197 10.1563 20.7184 10.0739 20.8649 9.92743C21.0115 9.78092 21.0938 9.5822 21.0938 9.375V4.6875C21.0914 4.59135 21.0729 4.49628 21.0391 4.40625L20.9922 4.32813C20.9658 4.27158 20.9316 4.21899 20.8906 4.17188L20.8203 4.10156C20.7758 4.06313 20.7257 4.03154 20.6719 4.00781L20.5781 3.96094H20.5391L12.7266 1.61719C12.5781 1.57812 12.422 1.57812 12.2734 1.61719L4.46095 3.96094C4.29545 4.00592 4.14934 4.1041 4.04518 4.24035C3.94102 4.3766 3.88458 4.54334 3.88458 4.71485C3.88458 4.88635 3.94102 5.05309 4.04518 5.18934C4.14934 5.32559 4.29545 5.42378 4.46095 5.46875ZM12.5 3.125L17.5938 4.6875L12.5 6.25L7.40626 4.6875L12.5 3.125Z" fill="#B7C6EB" />
                            </svg>
                        </div>
                        <a href="#" class="inline-block w-full py-2 pl-11 pr-4 text-md rounded hover:bg-gray-800 focus:outline-none focus:ring-1 focus:ring-gray-500 focus:bg-gray-800 ">
                            <p class="sidebar-hideable">Manage Your Classes</p>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
        <div class="flex items-baseline mt-[20px] ml-6 h-[alturaDesejada]">
            <div class="relative text-gray-500 hover:text-white focus-within:text-white">
                <div class="absolute inset-y-0 left-0 flex items-center pl-2  pointer-events-none">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 16L21 12M21 12L17 8M21 12L7 12M13 16V17C13 18.6569 11.6569 20 10 20H6C4.34315 20 3 18.6569 3 17V7C3 5.34315 4.34315 4 6 4H10C11.6569 4 13 5.34315 13 7V8" stroke="#545F71" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <a href="/src/Model/logout.php" class="inline-block w-full py-2 pl-11 pr-4 text-md rounded hover:bg-gray-800 focus:outline-none focus:ring-1 focus:ring-gray-500 focus:bg-gray-800 ">
                    <p class="sidebar-hideable">Logout</p>
                </a>
            </div>
        </div>



    </nav>

</body>

<script>
    const sidebar = document.getElementById('sidebar');
    const toggleArrow = document.getElementById('toggleArrow');
    const arrowIcon = document.querySelector('.arrow-left svg');
    const hideableElements = document.querySelectorAll('.sidebar-hideable');
    const iconElements = document.querySelectorAll('.icon');

    toggleArrow.addEventListener('click', function() {
        if (sidebar.classList.contains('w-28')) {
            sidebar.classList.replace('w-28', 'w-64');

            hideableElements.forEach(el => {
                el.classList.remove('hidden');
                el.classList.add('block');
            });

            iconElements.forEach(el => {
                el.style.marginBottom = "0";
            });

            arrowIcon.style.transform = "rotate(180deg)";
        } else {
            sidebar.classList.replace('w-64', 'w-28');

            hideableElements.forEach(el => {
                el.classList.add('hidden');
                el.classList.remove('block');
            });

            iconElements.forEach(el => {
                el.style.marginBottom = "20px";
            });

            arrowIcon.style.transform = "rotate(0deg)";
        }
    });
</script>

</html>