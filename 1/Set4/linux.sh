while true 
do
    echo ""
    echo "MENU"
    echo "1. display today's date"
    echo "2. Current users"
    echo "3. List files"
    echo "4. Exit"
    echo "Enter choice"
    read choice

    case $choice in
        1) echo "Date is $(date)" ;;
        2) echo "logged in users" 
            who ;;
        3) echo "Files" 
            ls -l ;;
        4) echo "Exitting" 
            exit ;;
        *) echo "Invalid choice" ;;
    esac
done
