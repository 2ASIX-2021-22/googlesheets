<x-guest-layout>
    <section>
        <main class="max-w-lg mx-auto mx-auto mt-10 bg-gray-100 border p-6 rounded-xl">
            <h1 class="text-center" font-bold text-xl>Register </h1>
            <form method="POST" action="/my-register" class="mt-10">
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="username"
                    >
                        Username
                    </label>
                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="username"
                           id="username"
                           required
                    >
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="email"
                    >
                        Email
                    </label>
                    <input class="border border-gray-400 p-2 w-full"
                           type="email"
                           name="email"
                           id="email"
                           required
                    >
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="password"
                    >
                        Password
                    </label>
                    <input class="border border-gray-400 p-2 w-full"
                           type="password"
                           name="password"
                           id="password"
                           required
                    >
                </div>

                <div class="mb-6">
                    <button type="submit" class="bg-indigo-500 text-white rounded py-2 px-4 hover:bg-red-500">Submit</button>
                </div>
            </form>
        </main>
    </section>
</x-guest-layout>
