<x-layouts.default>
    <div class="card bg-gray-100 w-100 shadow-sm p-2">
        <div class="card-body">
            <h2 class="card-title text-2xl">Login</h2>
            <label class="text-md" for="username">Username
            </label>
            <input class="input input-md bg-white" name="username" type="text" placeholder="Username" />
            <label class="text-md mt-2" for="password">Password
            </label>
            <input class="input input-md bg-white" name="password" type="text" placeholder="Password" />
            <a class="link link-primary " href="#">Create Account?</a>
            <div class="card-actions mt-2 justify-end">
                <button class="btn btn-primary" type="submit">Login</button>
            </div>
        </div>
    </div>
</x-layouts-default>
