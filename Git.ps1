[void][reflection.assembly]::LoadWithPartialName(

"System.Windows.Forms")
$Message = "Новое состояние"

$form = new-object Windows.Forms.Form
$form.Text = "Коммит к новому состоянию"
$form.Height = 400

$lable = New-Object Windows.Forms.Label
$lable.Text = "Коммит:"
$lable.Location = New-Object System.Drawing.Point(10,30)

$text = new-object Windows.Forms.TextBox
$text.Location= New-Object System.Drawing.Point(0,50)
$text.Text = $Message
$text.add_click({$text.SelectAll()})
$text.add_TextChanged({$Message = $text.Text})
$text.Width = 300
$text.TabIndex = 1

$button = new-object Windows.Forms.Button
$button.Location = New-Object System.Drawing.Point(80,300)
$button.Text = "Отправить коммит"
$button.add_click({$Message = $text.Text, $form.Close()})

$lableDel = New-Object Windows.Forms.Label
$lableDel.Text = "Удалить файлы"
$lableDel.Location = New-Object System.Drawing.Point(30,100)

$lableAdd = New-Object Windows.Forms.Label
$lableAdd.Text = "Добавить файлы"
$lableAdd.Location = New-Object System.Drawing.Point(30,170)

$textDel = new-object Windows.Forms.TextBox
$textDel.Location = new-object System.Drawing.Point(30, 130)
$del = ""
$textDel.Text = $del
$textDel.add_click({$textDell.SelectAll()})
$textDel.add_TextChanged({$del = $textDel.Text})
$textDel.Width = 200
$textDel.TabIndex = 4

$textAdd = new-object Windows.Forms.TextBox
$textAdd.Location = new-object System.Drawing.Point(30, 200)
$files = "."
$textAdd.Text = $files
$textAdd.add_click({$textAdd.SelectAll()})
$textAdd.add_TextChanged({$files = $textAdd.Text})
$textAdd.Width = 200
$textAdd.TabIndex = 4

$form.Controls.Add($textDel)
$form.Controls.Add($button)
$form.Controls.Add($lableDel)
$form.Controls.Add($lableAdd)
$form.Controls.Add($TextAdd)
$form.Controls.Add($text)
$form.Controls.Add($lable)
$form.Add_Shown({$form.Activate()})
$form.ShowDialog()

cd C:/Users//Oleg//Documents//GitHub//SmartHome4All

git checkout Develop
git rm $del
git add $files
git commit -m $Message
git remote add SmartHome4All https://github.com/SmartHome4/SmartHome4All.git
git pull SmartHome4All Develop
git push SmartHome4All Develop

cd C:/Users//Oleg//Documents//GitHub