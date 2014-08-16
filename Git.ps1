[void][reflection.assembly]::LoadWithPartialName(

"System.Windows.Forms")
$Message = "Новое состояние"

$form = new-object Windows.Forms.Form
$form.Text = "Коммит к новому состоянию"

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
$button.Location = New-Object System.Drawing.Point(100,200)
$button.Text = "Отправить коммит"
$button.add_click({$Message = $text.Text, $form.Close()})

$lableDel = New-Object Windows.Forms.Label
$lableDel.Text = "Удалить файлы"
$lableDel.Location = New-Object System.Drawing.Point(20,100)

$lableAdd = New-Object Windows.Forms.Label
$lableAdd.Text = "Добавить файлы"
$lableAdd.Location = New-Object System.Drawing.Point(150,100)

$radioDel = new-Object Windows.Forms.RadioButton
$radioDel.Location = New-Object System.Drawing.Point(20, 120)
$radioDel.add_click({$Command = "rm"})
$radioDel.TabIndex = 2

$radioAdd = new-Object Windows.Forms.RadioButton
$radioAdd.Location = New-Object System.Drawing.Point(150, 120)
$radioAdd.add_click({$Command = "add"})
$radioAdd.TabIndex = 3

$lableName = new-object Windows.Forms.Label
$lableName.Location = New-Object System.Drawing.Point(20, 150)
$lableName.Text = "Имена файлов и папок"
$lableName.Width = 300

$textName = new-object Windows.Forms.TextBox
$textName.Location = new-object System.Drawing.Point(50, 170)
$files = "."
$textName.Text = $files
$textName.add_click({$textName.SelectAll()})
$textName.add_TextChanged({$files = $textName.Text})
$textName.Width = 200
$textName.TabIndex = 4

if ($radioDel.Checked){
	$Command = "rm"
	
}

if ($radioAdd.Checked){
	$Command = "add"
}

$form.Controls.Add($textName)
$form.Controls.Add($button)
$form.Controls.Add($lableName)
$form.Controls.Add($lableDel)
$form.Controls.Add($lableAdd)
$form.Controls.Add($radioAdd)
$form.Controls.Add($radioDel)
$form.Controls.Add($text)
$form.Controls.Add($lable)
$form.Add_Shown({$form.Activate()})
$form.ShowDialog()



cd C:/Users//Oleg//Documents//GitHub//SmartHome4All

git checkout Develop
git $Command $files
git commit -m $Message
git remote add SmartHome4All https://github.com/SmartHome4/SmartHome4All.git
git pull SmartHome4All Develop
git push SmartHome4All Develop

cd C:/Users//Oleg//Documents//GitHub