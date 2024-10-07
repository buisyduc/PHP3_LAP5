<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>CREATE NEW</title>
    <style>
        *{
            margin: 10px;
        }
        body {
            background-color: #f0f4f8; /* Màu nền nhẹ nhàng */
        }
        .container {
            background-color: #ffffff; /* Nền trắng cho form */
            border-radius: 12px; /* Bo tròn các góc */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); /* Đổ bóng */
            padding: 30px; /* Khoảng cách bên trong */
            margin-top: 50px; /* Khoảng cách trên */
        }
        h1 {
            color: #007bff; /* Màu tiêu đề */
            margin-bottom: 30px; /* Khoảng cách dưới tiêu đề */
            font-family: 'Arial', sans-serif; /* Font chữ */
            text-align: center; /* Căn giữa tiêu đề */
        }
        .btn-primary {
            background-color: #28a745; /* Màu nền nút */
            border: none; /* Không có đường viền */
            transition: background-color 0.3s, transform 0.2s; /* Hiệu ứng chuyển màu và phóng to */
        }
        .btn-primary:hover {
            background-color: #218838; /* Màu nền khi hover */
            transform: scale(1.05); /* Phóng to nút khi hover */
        }
        .form-label {
            font-weight: bold; /* Làm đậm nhãn */
            color: #343a40; /* Màu chữ nhãn */
        }
        input[type="text"], input[type="number"], input[type="date"], input[type="file"] {
            border-radius: 8px; /* Bo tròn các góc input */
            border: 1px solid #ced4da; /* Đường viền sáng */
            transition: border-color 0.3s; /* Hiệu ứng chuyển màu đường viền */
        }
        input[type="text"]:focus, input[type="number"]:focus, input[type="date"]:focus {
            border-color: #80bdff; /* Đường viền khi focus */
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); /* Hiệu ứng bóng khi focus */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>CREATE NEW</h1>
        <a href="{{route('moive.home')}}" class="btn btn-primary">DANH SACH</a>


        <form action="{{route('moive.create')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">TIÊU ĐỀ PHIM</label>
                <input type="text" class="form-control" id="title" name="title" >
            </div>

            <div class="mb-3">
                <label for="poster" class="form-label">HÌNH ẢNH ÁP PHÍCH</label>
                <input type="file" class="form-control" id="poster" name="poster" >
            </div>

            <div class="mb-3">
                <label for="intro" class="form-label">GIỚI THIỆU PHIM</label>
                <input type="text" class="form-control" id="intro" name="intro" style="height: 100px" >
            </div>

            <div class="mb-3">
                <label for="release_date" class="form-label">NGÀY CÔNG CHIẾU</label>
                <input type="date" class="form-control" id="release_date" name="release_date" >
            </div>


            

            
            <div class="mb-3">
                <label  class="form-label">DANH MỤC GENES</label>
                <select name="gene_id" class="from-control" id="">
                    @foreach ($gene as $gene )
                    <option value="{{$gene->id}}">
                        {{$gene->name}}
                    </option>
                        
                    @endforeach
                </select>
              
            </div>

            <button type="submit" class="btn-custom" class="btn btn-primary">Submit</button>
           
            
        </form>
    </div>

    <script src="{{ asset('bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
