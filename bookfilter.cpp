#include<iostream>
#include<vector>
using namespace std;

typedef enum{
    Big,
    Medium,
    Small
} BookSize;

struct Book{
    string title;
    BookSize size;
    int pageCount;
};

class BookFilter{
    public:
        virtual bool apply(Book) = 0;
};

class TitleFilter : BookFilter{
    private:
        string m_title;
    public:
        TitleFilter(string title){
            m_title = title;
        }
        
        bool apply(Book book){
            if (book.title.find(m_title) != string::npos)   return true;
            return false;
        }
};
    


class BookSizeFilter : BookFilter{
    private:
        BookSize m_desiredSize;
    public:
        BookSizeFilter(BookSize desiredSize){
            m_desiredSize = desiredSize;
        }
    
        bool apply(const Book book){
        unsigned int minPages = 0;
        unsigned int maxPages = 0;

        switch (m_desiredSize){
        case Big:
            minPages = 0;
            maxPages = 100;
        case Medium:
            minPages = 101;
            maxPages = 500;
        case Small:
            minPages = 501;
            maxPages = UINT_MAX;
        };
        
        return ((book.pageCount >= minPages) && (book.pageCount < maxPages));
    }
};

bool BookPassesFilters(const Book& book, vector<BookSizeFilter>& filters){
    for (BookSizeFilter filter : filters){
        if (!filter.apply(book))
            return false;
    }
    return true;
}

vector<Book> FilterBooks(vector<Book> bookList, vector<BookSizeFilter>& filters){
    vector<Book> rval;
    for (Book book : bookList){
        if (BookPassesFilters(book, filters))
            rval.push_back(book);
    }
    return rval;
}