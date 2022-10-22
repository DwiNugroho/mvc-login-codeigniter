<nav class="w-full sticky top-0 py-[20px] bg-[#F7F8FC]">
  <section class="w-full flex justify-between px-[20px]">
    <h2 class="text-lg text-black"><b>Dashboard</b></h2>
    <section class="flex items-center">
    <div class="dropdown dropdown-end">
      <label tabindex="0" class="cursor-pointer">
        <section class="flex items-center">
          <h4 class="text-sm mr-2 text-black"><?= user()->fullname ?></h4>
          <div class="w-8 h-8 rounded-full bg-slate-300">
            <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" class="object-cover rounded-full" />
          </div>
        </section>
      </label>
      <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52 mt-2">
        <li><a href="/logout">Logout</a></li>
      </ul>
    </div>
    </section>
  </section>
</nav>