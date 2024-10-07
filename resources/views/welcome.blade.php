<x-layout>
  <h1>Welcome Page</h1>
  <p>Testing</p>

  <h2>POST</h2>
  <form action="/" method="POST">
    @csrf
    <input type="text" name="username" id="name">
    <button type="submit">Submit POST</button>
  </form>

  <h2>PUT</h2>
  <form action="/100" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="username" id="name">
    <button type="submit">Submit PUT</button>
  </form>

  <h2>DELETE</h2>
  <form action="/100" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Submit DELETE</button>
  </form>
</x-layout>
