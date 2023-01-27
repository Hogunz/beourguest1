<x-guest-layout>
  <div class="container mx-auto">

    <ul class="stepper" data-mdb-stepper="stepper">
      <li class="stepper-step stepper-active">
        <div class="stepper-head">
          <span class="stepper-head-icon"> 1 </span>
          <span class="stepper-head-text"> Personal Info </span>
        </div>
        <div class="stepper-content">
          <p class="text-black/50 dark:text-gray-400 uppercase text-2xl font-bold">Personal Info</p>
          <p class="mb-6">
            Tell us a bit about yourself. This information will appear on your public profile,<br>
            so that potential buyers can get to know you better.</p>
          <hr class="mb-6">
          <div class="flex flex-col">
            <div class="flex justify-between px-24   mb-6">
              <div>
                <p class="text-base font-medium text-black/50">Full Name</p>
              </div>
              <div class="order-last">
                <x-input class="px-6 py-2">
                </x-input>
                <x-input class="px-6 py-2">
                </x-input>
              </div>
            </div>
            <div class="flex justify-between px-24 mb-6">
              <div>
                <p class="text-base font-medium text-black/50">Profile Picture</p>
              </div>
              <div class="order-last w-96 ">
                <input class="block w-full   text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
              </div>
            </div>

            <div class="flex justify-between px-24 mb-6">
              <div>
                <p class="text-base font-medium text-black/50">Description</p>
              </div>
              <div class="order-last">
                <textarea id="message" rows="4" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 px-6 py-2 block p-2.5 w-full text-sm text-gray-900 bg-gray-50  border  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
                </textarea>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li class="stepper-step">
        <div class="stepper-head">
          <span class="stepper-head-icon"> 2 </span>
          <span class="stepper-head-text"> Professional Info </span>
        </div>
        <div class="stepper-content">
          <p class="text-black/50 dark:text-gray-400 uppercase text-2xl font-bold">Professional Info</p>
          <p class="mb-6">
            This is your time to shine. <br>Let potential buyers know what you do best <br> and how you gained your skills, certifications and experience.</p>
          <hr class="mb-6">
          <div class="flex flex-col">
            <div class="flex justify-between px-24   mb-6">
              <div>
                <p class="text-base font-medium text-black/50">Occupation</p>
              </div>
              <div class="order-last">

                <button id="dropdownCheckboxButton" data-dropdown-toggle="dropdownDefaultCheckbox" class="text-black bg-white font-base rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button">Category <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg></button>
                <!-- Dropdown menu -->
                <div id="dropdownDefaultCheckbox" class=" overflow-y-auto h-48 hidden z-10 w-48 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                  @for($i = 0; $i < 11; $i++)
                    <ul class="  p-3 space-y-3 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownCheckboxButton">
                      <li class=" ">
                        <div class="flex items-center  ">
                          <input id="checkbox-item-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                          <label for="checkbox-item-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Event Coordinator</label>
                        </div>
                      </li>
                    </ul>
                  @endfor
  </div>

  </div>
  </div>
  <div class="flex justify-between px-24 mb-6">
    <div>
      <p class="text-base font-medium text-black/50">Experience</p>
    </div>
    <div class="order-last w-96 ">
      <input class="block w-full   text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
    </div>
  </div>
  <div class="flex justify-between px-24 mb-6">
    <div>
      <p class="text-base font-medium text-black/50">Skills</p>
    </div>
    <div class="order-last">
      <textarea id="message" rows="4" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 px-6 py-2 block p-2.5 w-full text-sm text-gray-900 bg-gray-50  border  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
      </textarea>
    </div>
  </div>
  </div>
  </div>

  </li>
  <li class="stepper-step">
    <div class="stepper-head">
      <span class="stepper-head-icon"> 3 </span>
      <span class="stepper-head-text"> Account Security </span>
    </div>
    <div class="stepper-content">
      <p class="text-black/50 dark:text-gray-400 uppercase text-2xl font-bold">Account Security</p>
      <p class="mb-6">
        Trust and safety is a big deal in our community. <br>Please verify your email and phone number so that we can keep your account secured.</p>
      <hr class="mb-6">
      <div class="flex justify-between px-24 mb-6">
        <div>
          <p class="text-base font-medium text-black/50">Email</p>
        </div>
        <div class="order-last">
          <x-button class=" ">Verified</x-button>
        </div>
      </div>
    </div>
  </li>
  <li class="stepper-step">
    <div class="stepper-head">
      <span class="stepper-head-icon"> 4 </span>
      <span class="stepper-head-text"> Subscription </span>
    </div>
    <div class="stepper-content">
      <p class="text-black/50 dark:text-gray-400 uppercase text-2xl font-bold">Subscription</p>
      <p class="mb-6">
        For exclusive Photo and Video upload. <br>And Flash Company/Supplier important information like name, number and address.</p>
      <hr class="mb-6">
      <div class="flex justify-between px-24 mb-6">
        <div>
          <p class="text-base font-medium text-black/50">Proof of Payment</p>
        </div>
        <div class="order-last">
          <div class="flex justify-between px-24 mb-6">
            <div class="order-last w-96 ">
              <input class="block w-full   text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
            </div>
          </div>

        </div>
      </div>
      <div class="flex justify-between px-24 mb-6">
        <div>
          <p class="text-base font-medium text-black/50">Proof of Payment( Featuring )</p>
        </div>
        <div class="order-last">
          <div class="flex justify-between px-24 mb-6">
            <div class="order-last w-96 ">
              <input class="block w-full   text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
            </div>
          </div>

        </div>
      </div>
    </div>
  </li>
  </ul>

  </div>

</x-guest-layout>
