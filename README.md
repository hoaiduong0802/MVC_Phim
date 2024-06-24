# Movie Streaming Website

## Mục tiêu Dự án

Xây dựng một hệ thống quản lý trang web xem phim trực tuyến, cho phép người dùng xem phim lẻ và series phim, quản lý tài khoản cá nhân và lưu trữ lịch sử xem. Hệ thống cũng cho phép quản trị viên quản lý nội dung phim và người dùng.

## Phạm vi Dự án

### Người dùng (User)
- Đăng ký và đăng nhập vào hệ thống.
- Quản lý tài khoản cá nhân (thông tin cá nhân, mật khẩu).
- Xem phim lẻ và series phim.
- Theo dõi lịch sử xem phim.

### Quản trị viên (Admin)
- Quản lý thông tin phim (thêm, sửa, xóa phim lẻ và series phim).
- Quản lý người dùng (thêm, sửa, xóa thông tin người dùng).
- Xem và phân tích dữ liệu lịch sử xem phim của người dùng.

## Các yêu cầu chi tiết

### Yêu cầu chức năng

1. **Đăng ký tài khoản**
   - Người dùng có thể đăng ký tài khoản mới bằng cách cung cấp thông tin cá nhân cần thiết như tên, email, mật khẩu, ngày sinh và giới tính.

2. **Đăng nhập**
   - Người dùng có thể đăng nhập vào hệ thống bằng tài khoản đã đăng ký.

3. **Quản lý tài khoản cá nhân**
   - Người dùng có thể cập nhật thông tin cá nhân và thay đổi mật khẩu.

4. **Xem phim lẻ**
   - Người dùng có thể duyệt và xem các bộ phim lẻ.

5. **Xem series phim**
   - Người dùng có thể duyệt và xem các series phim, bao gồm các tập phim trong series đó.

6. **Xem lịch sử xem**
   - Người dùng có thể xem lịch sử các phim và tập phim đã xem.

7. **Quản lý phim (Admin)**
   - Admin có thể thêm, sửa, xóa thông tin phim lẻ.

8. **Quản lý series phim (Admin)**
   - Admin có thể thêm, sửa, xóa thông tin series phim và các tập phim trong series.

9. **Quản lý người dùng (Admin)**
   - Admin có thể thêm, sửa, xóa thông tin người dùng.

### Yêu cầu phi chức năng

- **Bảo mật:**
  - Hệ thống phải bảo vệ thông tin cá nhân của người dùng bằng cách sử dụng các phương pháp mã hóa an toàn.
  - Chỉ admin mới có quyền truy cập và quản lý thông tin người dùng và phim.

- **Hiệu năng:**
  - Hệ thống phải có khả năng xử lý nhiều người dùng đồng thời mà không ảnh hưởng đến hiệu suất.
  - Hệ thống phải có thời gian phản hồi nhanh khi người dùng thực hiện các thao tác như xem phim, quản lý tài khoản.

- **Khả năng mở rộng:**
  - Hệ thống phải có khả năng mở rộng để hỗ trợ số lượng lớn người dùng và nội dung phim.

## Mô hình ERM (Entity-Relationship Model)

### Các thực thể chính:

1. **User (Người dùng)**
   - `UserID` (PK)
   - `Username`
   - `Password`
   - `FullName`
   - `DateOfBirth`
   - `Gender`
   - `Email`
   - `Role` (admin, guest)

2. **Movie (Phim)**
   - `MovieID` (PK)
   - `Title`
   - `ReleaseDate`
   - `Genre`
   - `Country`
   - `AgeRating`
   - `Description`

3. **Series (Series phim)**
   - `SeriesID` (PK)
   - `Title`
   - `ReleaseDate`
   - `Genre`
   - `Country`
   - `AgeRating`
   - `Description`

4. **Episode (Tập phim)**
   - `EpisodeID` (PK)
   - `SeriesID` (FK)
   - `EpisodeNumber`
   - `Title`
   - `Duration`
   - `Description`

5. **WatchHistory (Lịch sử xem)**
   - `WatchID` (PK)
   - `UserID` (FK)
   - `MovieID` (FK, nullable nếu xem phim lẻ)
   - `EpisodeID` (FK, nullable nếu xem series)
   - `WatchDate`
   - `WatchTime`

### Mối quan hệ:

- Một người dùng có thể xem nhiều phim hoặc tập phim (`User` - `WatchHistory`: 1 - N).
- Một phim có thể được nhiều người xem (`Movie` - `WatchHistory`: 1 - N).
- Một series có nhiều tập phim (`Series` - `Episode`: 1 - N).
- Một tập phim thuộc về một series (`Episode` - `Series`: N - 1).

## Sơ đồ ERD (Entity-Relationship Diagram)

```plaintext
User (UserID, Username, Password, FullName, DateOfBirth, Gender, Email, Role)
    |
    | 1 - N
    |
WatchHistory (WatchID, UserID, MovieID, EpisodeID, WatchDate, WatchTime)
    |          |             |
    |          |             | 
    |          |             | N - 1
    |          |             |
    |          |             | Movie (MovieID, Title, ReleaseDate, Genre, Country, AgeRating, Description)
    |          |
    |          | N - 1
    |          |
    |          | Episode (EpisodeID, SeriesID, EpisodeNumber, Title, Duration, Description)
    |
    |
    | N - 1
    |
Series (SeriesID, Title, ReleaseDate, Genre, Country, AgeRating, Description)
```

## GIẢI THÍCH CHI TIẾT

- `User:` Lưu thông tin cá nhân người dùng và phân quyền (admin hoặc guest).
- `Movie:` Lưu thông tin các phim lẻ.
- `Series:` Lưu thông tin các series phim.
- `Episode:` Lưu thông tin các tập phim thuộc series.
- `WatchHistory:` Lưu lịch sử xem phim của người dùng, bao gồm thời gian xem và tập/phim nào đã được xem.
## 

## CODE BLOCK || CÁC BẢNG TRONG DATABASE
```c
CREATE TABLE User (
    UserID INT PRIMARY KEY,
    Username VARCHAR(50) NOT NULL,
    Password VARCHAR(255) NOT NULL,
    FullName VARCHAR(100),
    DateOfBirth DATE,
    Gender VARCHAR(10),
    Email VARCHAR(100),
    Role VARCHAR(10) CHECK (Role IN ('admin', 'guest'))
);

CREATE TABLE Movie (
    MovieID INT PRIMARY KEY,
    Title VARCHAR(100),
    ReleaseDate DATE,
    Genre VARCHAR(50),
    Country VARCHAR(50),
    AgeRating VARCHAR(10),
    Description TEXT
);

CREATE TABLE Series (
    SeriesID INT PRIMARY KEY,
    Title VARCHAR(100),
    ReleaseDate DATE,
    Genre VARCHAR(50),
    Country VARCHAR(50),
    AgeRating VARCHAR(10),
    Description TEXT
);

CREATE TABLE Episode (
    EpisodeID INT PRIMARY KEY,
    SeriesID INT,
    EpisodeNumber INT,
    Title VARCHAR(100),
    Duration TIME,
    Description TEXT,
    FOREIGN KEY (SeriesID) REFERENCES Series(SeriesID)
);

CREATE TABLE WatchHistory (
    WatchID INT PRIMARY KEY,
    UserID INT,
    MovieID INT NULL,
    EpisodeID INT NULL,
    WatchDate DATE,
    WatchTime TIME,
    FOREIGN KEY (UserID) REFERENCES User(UserID),
    FOREIGN KEY (MovieID) REFERENCES Movie(MovieID),
    FOREIGN KEY (EpisodeID) REFERENCES Episode(EpisodeID)
);

```

## Sơ đồ Use Case

### Actors (Tác nhân):
- **Admin**
- **User**

### Use Cases (Các trường hợp sử dụng):
- `Đăng ký tài khoản`
- `Đăng nhập`
- `Quản lý tài khoản cá nhân`
- `Xem phim lẻ`
- `Xem series phim`
- `Quản lý phim (Admin)`
- `Quản lý series phim (Admin)`
- `Xem lịch sử xem`
- `Quản lý người dùng (Admin)`

### Use Case Diagram

```plaintext
                              +-------------------+
                              |      Admin        |
                              +-------------------+
                               /       |         \
                              /        |          \
                             /         |           \
                            /          |            \
                           /           |             \
        +-------------+   /   +-------------------+   \
        | Đăng nhập   |<----->| Quản lý phim      |    |
        +-------------+       +-------------------+    | 
              ^                                        |
              |                                        |
              |                                        |
              |   +--------------------+     +--------------------+
              |   | Quản lý series     |     | Quản lý người dùng |
              |   +--------------------+     +--------------------+
              |
              | 
        +-----------------+
        |      User       |
        +-----------------+
--------------^    ^---------------------------------------------------------
|             |    |                                                        |
|             |    |                                                        |   
|        +-------------+       +-----------------+                          | 
|        | Đăng ký     |       | Quản lý tài     |                          |
|        | tài khoản   |       | khoản cá nhân   |                          |
|        +-------------+       +-----------------+                          |
|              ^    ^                                                       |
|              |    |                                                       |  
|              |    |                                                       |
|        +-------------+       +-----------------+                          |
|        | Xem phim    |       | Xem lịch sử     |                          |
|        | lẻ          |       | xem             |                          |
|        +-------------+       +-----------------+                          |
|              ^    ^                                                       |
|              |    |                                                       |
|              |    |                                                       |
|        +-------------+                                                    |
|        | Xem series  |                                                    | 
|        | phim        |                                                    |
|        +-------------+                                                    |
|___________________________________________________________________________|        
#   M V C _ P h i m  
 