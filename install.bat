call composer self-update
call composer update
call composer dump-autoload

call npm install -D tailwindcss alpinejs
call npm install -D typescript ts-loader
call npm install -D jquery @types/jquery
call npm install -D chart.js @types/chart.js
call npm install -D chartjs-plugin-datalabels

@call npm install -D bootstrap @types/bootstrap @popperjs/core

call npm run dev