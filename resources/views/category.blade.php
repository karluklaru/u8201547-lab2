<!DOCTYPE html>
<html>
<head>
    <title>!DOCTYPE</title>
    <meta charset="utf-8">
</head>
<body>
    <form>
        <input type="text" name="is_active" placeholder="Type is_active field (true, false)">
        <input type="text" name="active_since" placeholder="Type active_since field (yyyy-mm-dd)">
        <input type="text" name="active_until" placeholder="Type active_until field (yyyy-mm-dd)">
        <button>Filter</button>
    </form>

    <div>
        <div>
            <ul> {{ $category->name }} </ul>
        </div>
        @foreach($banners as $banner)
            <ul>{{ $banner['name'] }}</ul>
            <ul>{{ $banner['is_active'] }}</ul>
            <ul>{{ $banner['active_since'] }}</ul>
            <ul>{{ $banner['active_until'] }}</ul> 
            <ul>{{ $banner['link_in_banner'] }}</ul> 
            <img>{{ $banner['image_file'] }}</img>
        @endforeach
    </div>
    
</body> 
</html>