# Laravel Blog
### Main page
![Main page](https://github.com/neiskip/larablog/blob/main/preview/1.jpg?raw=true)
### Admin panel
![Admin panel](https://github.com/neiskip/larablog/blob/main/preview/2.jpg?raw=true)

## 

Simple blog written in Larave. There are authorization, registration, post create page, post view pages, search through posts and very simple admin panel, which will be improved in future.

## Usage
### If you are going to export SQL file to your schema instead of migrations:
```bash
mysql -u [username] -p [database_name] < larablog.sql
```
or
```bash
psql -h [hostname] -d [database_name] -U [username] -f larablog.sql
```
**Admin user: admin@admin.su**\
**Admin password: admin**\

**User: skip@ma.su**\
**Password: 123**

### If you use migration I recommend to add user_role column to not look around user ID's:

```
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            .
            .
            .
            $table->unsignedTinyInteger('user_role')->default(0);
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
