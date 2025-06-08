## 📝 **1. `vi` Editor Tasks**

---

### **a. Create a file, write your name and address, save and exit**

1. Open terminal and type:

   ```bash
   vi myfile.txt
   ```
2. Press `i` to enter **Insert mode**.
3. Type your name and address, for example:

   ```
   John Doe
   123 Main Street, City
   ```
4. Press `Esc` to exit Insert mode.
5. Type `:wq` and press `Enter` to **save and exit**.

---

### **b. Open the same file**

```bash
vi myfile.txt
```

---

### **c. Copy first line and paste it at the end of the file**

1. Make sure you're in **Normal mode** (press `Esc` just to be sure).
2. Place the cursor on the **first line**.
3. Type:

   ```
   yy
   ```

   → (This **yanks** or copies the current line)
4. Move to the **last line** using:

   ```
   G
   ```
5. Press:

   ```
   p
   ```

   → (This **pastes** the copied line **after** the current line)

---

### **d. Change text in the file**

1. Move the cursor to the word or line you want to change.
2. Press:

   ```
   i
   ```

   → (to enter Insert mode)
3. Make the changes you want.
4. Press `Esc` when you're done.

OR to change an entire line:

* Press:

  ```
  cc
  ```

  → (clears the line and puts you in Insert mode to rewrite it)

---

### **e. Delete two lines**

1. Move the cursor to the first line you want to delete.
2. Press:

   ```
   2dd
   ```

   → (deletes 2 lines including the current one)

---

### **f. Delete word from current cursor position**

* Move the cursor to the beginning of the word (or within it), then press:

  ```
  dw
  ```

  → (deletes the word starting from cursor position)

---

### **g. Exit without saving changes**

* Press `Esc` to ensure you're in Normal mode.
* Then type:

  ```
  :q!
  ```

  and press `Enter`

---

### 🧠 Tips to Remember:

* `i` = Insert mode
* `Esc` = Normal mode
* `:w` = write (save)
* `:q` = quit
* `:q!` = quit without saving
* `:wq` = save and quit

Let me know if you want this in PDF or printable format too!
