# echo "comenzando proceso"
mkdir $1
chmod 757 $1
cd $1
echo " Bienvennido a" $1 | cat > index.php
chmod 757 index.php
mkdir css
chmod 757 css
mkdir css/user
chmod 757 css/user
echo " " | cat > css/user/estilo.css
chmod 757 css/user/estilo.css
mkdir css/admin
chmod 757 css/admin
echo " " | cat > css/admin/estilo.css
chmod 757 css/admin/estilo.css
mkdir img 
chmod 757 img 
mkdir img/avatars
chmod 757 img/avatars
mkdir img/buttons
chmod 757 img/buttons
mkdir img/products
chmod 757 img/products
mkdir img/pets
chmod 757 img/pets
mkdir js
chmod 757 js
mkdir js/validations
chmod 757 js/validations
echo " " | cat > js/validations/login.js
chmod 757 js/validations/login.js
echo " " | cat > js/validationsregister.js
chmod 757 js/validationsregister.js
mkdir js/effects
chmod 757 js/effects
echo " " | cat > js/effects/panels.js
chmod 757 js/effects/panels.js
mkdir tpl
chmod 757 tpl
echo " " | cat > tpl/main.tpl
chmod 757 tpl/main.tpl
echo " " | cat > tpl/login.tpl
chmod 757 tpl/login.tpl
echo " " | cat > tpl/register.tpl
chmod 757 tpl/register.tpl
echo " " | cat > tpl/panel.tpl
chmod 757 tpl/panel.tpl
echo " " | cat > tpl/profile.tpl
chmod 757 tpl/profile.tpl
echo " " | cat > tpl/crud.tpl
chmod 757 tpl/crud.tpl
mkdir php
chmod 757 php
echo " " | cat > php/create.php
chmod 757 php/create.php
echo " " | cat > php/read.php
chmod 757 php/read.php
echo " " | cat > php/update.php
chmod 757 php/update.php
echo " " | cat > php/delete.php
chmod 757 php/delete.php
echo " " | cat > php/dbconect.php
chmod 757 php/dbconect.php
# echo "proceso finalizado"