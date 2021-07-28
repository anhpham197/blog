<footer class="bg-gray-800 py-20 mt-20">
    <div class="sm:flex flex-wrap justify-between w-4/5 pb-10 m-auto border-b-2 border-gray-700">
        <div>
            <h3 class="text-lg sm:font-bold text-gray-100">Pages</h3>
            <ul class="py-4 sm:text-sm pt-4 text-gray-400">
                <li class="pb-2">
                    <a href="/" class="hover:font-bold">Home</a>
                </li>
                <li class="pb-2">
                    <a href="/blog" class="hover:font-bold">Blog</a>
                </li>
                <li class="pb-2">
                    <a href="/login" class="hover:font-bold">Login</a>
                </li>
                <li class="pb-2">
                    <a href="/register" class="hover:font-bold">Register</a>
                </li>
            </ul>
        </div>

        <div>
            <h3 class="text-lg sm:font-bold text-gray-100">Latest posts</h3>
            <ul class="py-4 sm:text-sm pt-4 text-gray-400">
                <?php
                    $posts = \App\Models\Post::orderBy('created_at', 'desc')->limit(4)->get();  
                ?>
                @foreach ($posts as $post)
                    <li class="pb-2">
                        <a href="/blog/{{ $post->slug }}" class="hover:font-bold">{{ $post->title }}</a>
                    </li> 
                @endforeach
            </ul>
        </div>
        
        <div>
            <h3 class="text-lg sm:font-bold text-gray-100">About us</h3>
            <ul class="py-4 sm:text-sm pt-4 text-gray-400">
                <li class="pb-2">
                    <a href="/" class="hover:font-bold">What we do?</a>
                </li>
                <li class="pb-2">
                    <a href="/" class="hover:font-bold">Contact</a>
                </li>
            </ul>
        </div>
    </div>

    <p class="w-25 w-4/5 pb-3 m-auto text-xs text-gray-100 pt-6">
        &copy; Copyright 2021. All rights reserved.
    </p>
</footer>