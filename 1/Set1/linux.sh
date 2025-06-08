# Write shell program to get three arguments through 
# command line and perform all arithmetic operations

num1=$1
opr=$2
num2=$3

case $opr in
'+') echo "$num1 + $num2 = $((num1 + num2))" ;;
'-') echo "$num1 - $num2 = $((num1 - num2))" ;;
'*') echo "$num1 * $num2 = $((num1 * num2))" ;;
'/') 
    if [ $num1 -gt $num2 ] 
    then 
        echo "$num1 / $num2 = $((num1 / num2))"
    else
        echo "Error: Div by Zero not allowed"
    fi
;;

'%') echo "$num1 % $num2 = $((num1 % num2))" ;;
*) echo "Invalid operator. Use +, -, \*, /, %. " ;;
esac