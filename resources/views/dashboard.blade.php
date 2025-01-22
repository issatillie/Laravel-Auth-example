<x-layout>
    <div class="flex items-center justify-center h-screen">
        <div class="md:max-w-sm space-x-3">
            @guest
                I'm sorry, but it seems you aren't logged in.
            @endguest
            @auth
                <div class="flex">
                    <p class="me-1">It seems you are authenticated -</p>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="font-semibold text-blue-600 hover:text-blue-500">logout</button>
                    </form>
                </div>
            @endauth
        </div>
    </div>
</x-layout>
