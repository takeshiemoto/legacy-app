import {
  Box,
  Container,
  List,
  ListItem,
  ListItemText,
  Typography,
} from "@mui/material";
import axios from "axios";
import { useEffect, useState } from "react";

interface News {
  id: number;
  public_id: string;
  title: string;
  user_id: number;
  created_at: string | null;
  updated_at: string | null;
  deleted_at: string | null;
  user: {
    id: number;
    name: string;
  };
}

const Dashboard = () => {
  const [newsItems, setNewsItems] = useState<News[]>([]);

  useEffect(() => {
    const fetchNews = async () => {
      try {
        const response = await axios.get("/api/v1/news");
        setNewsItems(response.data);
      } catch (error) {
        console.error("Error fetching news:", error);
      }
    };

    fetchNews();
  }, []);

  return (
    <Container maxWidth="md">
      <Box sx={{ my: 4 }}>
        <Typography variant="h4" component="h1" gutterBottom>
          News Dashboard
        </Typography>
        <List>
          {newsItems.map((item) => (
            <ListItem
              key={item.id}
              sx={{
                mb: 2,
                p: 2,
                border: "1px solid #ccc",
                borderRadius: "8px",
              }}
            >
              <ListItemText primary={item.title} secondary={item.user.id} />
            </ListItem>
          ))}
        </List>
      </Box>
    </Container>
  );
};

export default Dashboard;
