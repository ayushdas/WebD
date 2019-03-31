import xlrd

# Open the file
wb = xlrd.open_workbook('Database.xlsx')

# Get the list of the sheets name
sheet_list = wb.sheet_names()


# Select one sheet and get its size
s = wb.sheet_by_name(sheet_list[0])
# print(s.nrows, s.ncols)

# Trial access of cell content
# print ("Insert into tablename values(",s.cell(2,1).value)  # 3rd row, 2nd column
ctr = 1
for i in range(2,138):
    vals= []
    for j in range(0,5):
        vals.append(s.cell(i,j).value)
        #  print ("Insert into tablename values(",s.cell(2,1).value)  # 3rd row, 2nd column
    # print(vals)
    string = "Insert into carbonInFood values("+str(ctr)+","
    for j in range(len(vals)):               
        string += '\''
        string += vals[j]
        string += '\''
        if (j!=(len(vals)-1)):
            string += ","
    string += ");"
    ctr += 1
    print(string)